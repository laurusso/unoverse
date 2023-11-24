<?php     

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Pessoa; 
use App\Models\Aluno;
use App\Models\Professor;
use App\Models\Atividade;
use App\Models\Arquivo;
use App\Models\Escola;
use App\Models\Exercicio;
use App\Models\Alternativa;
use Illuminate\Support\Facades\Validator;

use Laravel\Socialite\Facades\Socialite; 

use Illuminate\Support\Facades\Log;
use Intervention\Image\Facades\Image;
//use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class PessoaController extends Controller
{
    public function cadastrar( Request $req ){   
        $user = $req->session()->get('user');
      //  dd($user['nome']);
       //$dados_pessoa = $req->session()->get('user');
        //$dados = json_decode($dados_pessoa, true);

      //  dd($dados);
        $senha=$user['senha'];
        //dd($dados['senha']);
        $senhacript =  md5($senha);
        $banco = array(
            "email" => $user['email'], 
            "senha" => $senhacript,
            "foto" => $user['foto'],
            "nome" => $user['nome'],
            "sobrenome" => $user['sobrenome'],
            "genero" => $user['genero'], 
            "curioso" => $user['curioso'],
            "adm" => false, 
            "ativo" => true
        );
         
       // $dados_pessoa = $req->only(['email','foto','nome','sobrenome','genero','curioso']);
       // $dados_pessoa['senha'] = $req['password'];
       
        //$dados_pessoa['senha'] =  $senha;

       // $dados_pessoa['adm'] = false; 
        
        // if($req->hasFile('foto'))
        // {
        //     $num = rand(1111,9999); // escolhe numero pra não repetir
        //     $dir = "user/"; // pasta onde armazena arquivos, localizada no projeto em: /public/atividades
        //     $ex = $req['foto']->guessClientExtension(); // pega extensão, jpg, png ...
        //     $nomeArquivo = "user".$num.".".$ex; // monta novo nome
        //     $req['foto']->move($dir,$nomeArquivo);//move o arquivo para  /public/atividades
           
        //     $dados_pessoa['foto'] = $dir . $nomeArquivo;
           
        // }
        // else{
        //     if($req->input('type_user') == "aluno")
        //     { 
        //         $dados_pessoa['foto'] = "user/default/perfilEstudante.svg";
        //     }
        //     else if($req->input('type_user') == "professor")
        //     {
        //         $dados_pessoa['foto'] = "user/default/perfilProfessor.svg";
        //     }
        //     if($req->input('curioso') == "true")
        //     {
        //         $dados_pessoa['foto'] = "user/default/perfilCurioso.svg";
        //     }
        // }

        Pessoa::create($banco);
        //antes ajustar cript senha, foto

        $id_user = Pessoa::orderBy('id', 'desc') ->value('id'); //seleciona o ultimo id inserio em Atividades
        
        if($user['type_user'] == "aluno")
        {    
            $escola = $user['codigo_escola'];
           
            $dado = array(
                "id_aluno" => $id_user , 
                "email" => $user['email'],
                "id_escola" => $escola,

            ); 
            
             Aluno::create($dado);

             
        }
        else if($user['type_user'] == "professor")
        {
            $escola = $user['codigo_escola'];
            $dado = array (
                "id_prof" => $id_user , 
                "email" => $user['email'],
                "id_escola" => $escola,
            );
             Professor::create($dado);
        }
        $id_pessoa = Pessoa::orderBy('id', 'desc') ->value('id');
        Auth::loginUsingId($id_pessoa);
        return redirect('/menu/home')->with('success', 'Cadastro realizado com sucesso! Agora você faz parte da familia unoverse <3');
        // return view('menu.home')->with('success', 'Cadastro realizado com sucesso! Agora você faz parte na familia <3');

    }
    public function index(){

        return view('menu.entrar');   
    }

     
    public function perfil(){
        $id = Auth::user()->id;   
        $user = Pessoa::where('id',$id)->first();
        $escolas = Escola::all(); 

            if( Aluno::where('id_aluno',$id)->first())
              { 
                $userModo = 'Estudante';
                $id_escola= Aluno::where('id_aluno',$id)->value('id_escola');
               
              }
            else if( Auth::user()->curioso == 1)            
              { $userModo ='Curioso';
                $id_escola = null; }
            else if(Professor::where('id_prof',$id)->first() )
              { 
                $userModo = 'Professor';
                $id_escola= Professor::where('id_prof',$id)->value('id_escola');
              }
            

       if($user['foto'] == null)
       {
            $img = "user/Defaultuser.png";
       }
       else{
            $img = $user['foto'];
       }
        
        return view('menu.perfil',compact('user','img','userModo','escolas','id_escola'));
    }
    public function perfiladm(){
        $id = Auth::user()->id;   
        $user = Pessoa::where('id',$id)->first();
        if(Auth::user()->adm == 1)
        { $userModo ='Administrador'; }
            

       if($user['foto'] == null)
       {
            $img = "user/Defaultuser.png";
       }
       else{
            $img = $user['foto']; 
       }
        
        return view('adm.perfiladm',compact('user','img','userModo'));
    }
    
    public function login(Request $req)
    {
    
        $req->validate(
            [
                'email' => 'required|email',
                'senha'=> 'required'
            ],       
            [   'email.required' => 'Email é obrigatório',
                'email.email' => 'O email deve ser válido',
                'senha.required' => 'Senha é obrigatória',
                // 'senha.min' => 'senha deve ser no min 6 caracteres'
            ]
        );

        $user = Pessoa::where('email', $req->input('email'))->first();
                                        //$credenciais = $req->only('email','senha');
                                    // $autenticado = Auth()->attempt($credenciais);
       
        if(!$user){
            return redirect()->route('menu.menuCad')->with('user_semCad', 'Usuário não encontrado. Cadastre-se !');;
        }                             
        
        else if($user['ativo'] == true) {                         
       
      
        if(!(md5($req->input('senha')) == $user->senha))
        //if(!password_verify($req->input('senha'), $user->senha))
        {
            return redirect()->route('login.index');

        }
      
        Auth::loginUsingId($user->id);
      
      if(Auth::user()->adm == true){
         return redirect()->route('adm.index');

      }
      else{
      return redirect()->route('menu.home');
       }
    }
    else
    {
        return redirect('/menu/home')->with('user_desativado', 'Usuário desativado. Entre em contato com adm pelo email: unoverse.2023@gmail.com');
    }
    }
 
    public function logout(){
        
      
        Auth::logout(); 

    return redirect('menu/entrar');   

        
    }
    public function atividade(){   
        $atvs = Atividade::all();
       
        $id = Auth::user()->id;
            if( Aluno::where('id_aluno',$id)->first())
            { $typeUser='estudante';}
            else if( Professor::where('id_aluno',$id)->first())
            { $typeUser='curioso';}
            else if(Auth::user()->curioso == true)
            { $typeUser='curioso';}

        //$arq = Arquivo::all();
        return view('users.mostra',compact('atvs','typeUser'));   
    }  
    public function boxcode()
    {
        return view('users.boxcode');
    }
    public function lercode($num)
    {
        $caminhoArquivo = Atividade::where('num', $num)->value('codigo');
        $nome = Atividade::where('num', $num)->value('nome');
        $descricao = Atividade::where('num', $num)->value('descricao');
        $arq = Arquivo::where('fk_num',$num)->value('upload');
        $hasExer = Exercicio::where('fk_atividade', $num)->first();
        $id=$num;

        //$hasExer = true;
        if (file_exists($caminhoArquivo)) {
            // Leia o conteúdo do arquivo
            $conteudo = file_get_contents($caminhoArquivo);
           

            
       

        } else {  
            // Arquivo não encontrado  
          
            $conteudo = "";
          

            // return redirect()->back()->with(['conteudo' => $conteudo, 'arq' => $arq, 'descricao' => $descricao, 'nome' => $nome, 'hasExer' =>$hasExer]);
            
            
        }
        return redirect()->back()->with(['conteudo' => $conteudo, 'arq' => $arq,
        'descricao' => $descricao, 'nome' => $nome,
        'hasExer' =>$hasExer, 'num' => $id]);
    }
    public function MostraExercicio($num){
       $exercicios = Exercicio::where('fk_atividade',$num)->get();
       $alternativas = Alternativa::all();
       return view('users.exercicio', compact('exercicios','alternativas')); 
    }

    public function logadoCurioso()
    {
        return view('users.logadaCurioso'); 
    }
    public function logadoAluno()
    {
        return view('users.logadaAluno');
    }
    public function logadoProfessor()
    {
        return view('users.logadaProfessor');
    }

    public function redirecionaAtv(){
        $id = Auth::user()->id;
            if( Aluno::where('id_aluno',$id)->first())
              {  return view('users.logadaAluno');}
            else if( Auth::user()->curioso == 1)            
              {  return view('users.logadaCurioso');}
            else if(Professor::where('id_prof',$id)->first() )
                {return view('users.logadaProfessor');}
            else{
               return view('menu.home'); 
            }
    } 
    public function nivelAtvAluno($nivel){
        $typeUser='estudante';
         
        if($nivel == 'iniciante')
        {
            // $atvs = Atividade::where('modulo', $nivel)->get();
            $atvs = Atividade::where('modulo', $nivel)
            ->where('aluno', true) ->get();
            //$arq = Arquivo::all();
           
        
            return view('users.mostra',compact('atvs','typeUser')); 
        }
        else if($nivel == 'intermediario')
        {
            $atvs = Atividade::where('modulo', $nivel)->where('aluno', true) ->get();
            //$arq = Arquivo::all();
            return view('users.mostra',compact('atvs','typeUser')); 
        }
        else if($nivel == 'avancado')
        {
            $atvs = Atividade::where('modulo', $nivel)->where('aluno', true) ->get();
            //$arq = Arquivo::all();
            return view('users.mostra',compact('atvs','typeUser')); 
        }

    }
    public function nivelAtvCurioso($nivel){

        $typeUser='curioso';
        if($nivel == 'iniciante')
        {
            // $atvs = Atividade::where('modulo', $nivel)->get();
            $atvs = Atividade::where('modulo', $nivel)
            ->where('curioso', true)->get();
            //$arq = Arquivo::all();
           
           
            return view('users.mostra',compact('atvs','typeUser')); 
        }
        else if($nivel == 'intermediario')
        {
            $atvs = Atividade::where('modulo', $nivel)->where('curioso', true)->get();
            //$arq = Arquivo::all();
            return view('users.mostra',compact('atvs','typeUser')); 
        }
        else if($nivel == 'avancado')
        {
            $atvs = Atividade::where('modulo', $nivel)->where('curioso', true)->get();
            //$arq = Arquivo::all();
            return view('users.mostra',compact('atvs','typeUser')); 
        }

    }
    public function nivelAtvProfessor($nivel){

        $typeUser='professor';
        if($nivel == 'iniciante')
        {
            // $atvs = Atividade::where('modulo', $nivel)->get();
            $atvs = Atividade::where('modulo', $nivel)
            ->where('aluno', false)
            ->where('curioso', false)
            ->get();
            //$arq = Arquivo::all();
           
           
            return view('users.mostra',compact('atvs','typeUser'));   
        }   
        else if($nivel == 'intermediario')  
        {
            $atvs = Atividade::where('modulo', $nivel)
            ->where('aluno', false)     
            ->where('curioso', false)
            ->get();
            //$arq = Arquivo::all();
            return view('users.mostra',compact('atvs','typeUser')); 
        }
        else if($nivel == 'avancado')
        {
            $atvs = Atividade::where('modulo', $nivel)->where('aluno', false)
            ->where('curioso', false)
            ->get();
            //$arq = Arquivo::all();
            return view('users.mostra',compact('atvs','typeUser')); 
        }

    }
    public function voltar()
    {
        return redirect()->back();
    }

   
  
    public function editPerfil(Request $req){

      $campo=$req->input('campo');
      $id = Auth::user()->id;
      $contAlterado = $req->input($campo);
      $dados_perfil = array( 
      $campo => $contAlterado);
 
      if($campo == "email")
      {
        if($req['email'] != Auth::user()->email)
        {       
            return redirect()->route('edit.novo.email', ['id' => $req['id'], 'nome' => $req['nome'], 'email' => $req['email']]);
        }
        else{
            return redirect()->back();
        }
      }

      elseif($campo == "foto"){
            $fotodoBanco = Auth::user()->foto;
            if( $fotodoBanco != "user/default/perfilEstudante.svg" && $fotodoBanco != "user/default/perfilProfessor.svg"  &&
                    $fotodoBanco != "user/default/perfilCurioso.svg")
            {
                if (file_exists($fotodoBanco)) {
                        // Tenta excluir o arquivo
                        unlink($fotodoBanco);
                    } 
            }
            if($req->hasFile('foto'))
            {
            
                $num = rand(1111,9999); // escolhe numero pra não repetir
                $dir = "user/"; // pasta onde armazena arquivos, localizada no projeto em: /public/atividades
                $ex = $req['foto']->guessClientExtension(); // pega extensão, jpg, png ...
                $nomeArquivo = "user".$num.".".$ex; // monta novo nome
                $req['foto']->move($dir,$nomeArquivo);//move o arquivo para  /public/atividades
                $fotoAlt['foto'] = $dir . $nomeArquivo;

            }
            else{ 
                if( Aluno::where('id_aluno',$id)->first())
                { $fotoAlt['foto'] = "user/default/perfilEstudante.svg";   }
                else  if( Professor::where('id_prof',$id)->first())
                {
                    $fotoAlt['foto'] = "user/default/perfilProfessor.svg";
                }
                else if(Auth::user()->curioso == "true")
                {
                    $fotoAlt['foto'] = "user/default/perfilCurioso.svg";
                }
                else if(Auth::user()->adm == "true")
                {
                    $fotoAlt['foto'] = "user/default/perfilAdm.svg";
                }
            }
            Pessoa::where('id',$id)->update($fotoAlt);
            return redirect()->back();
        }
        else if($campo == "senha")
        {
            $validator = Validator::make($req->all(), [
                'Senhanova' => 'required|min:5',
            ], [
                'Senhanova.min' => 'A senha deve possuir no min 5 caracteres',
                'Senhanova.required' => 'Ambos campos devem ser preenchidos',
            ]);
            // Se a validação falhar, adicione os erros à sessão e redirecione de volta ao formulário
            if ($validator->fails()) {
                if(Auth::user()->adm == true){
                    return redirect() ->route('adm.perfil')->withErrors($validator)->withInput();
                }
                else{
                    return redirect() ->route('login.perfil')->withErrors($validator)->withInput();}
            }

            $ant = $req['Senhavelha'];
            $senhaAntiga =  md5($ant);
           
            if(Auth::user()->senha == $senhaAntiga && $ant != $req['Senhanova'] )
            { 
                $nova =  $req['Senhanova'];
                $senhaNova['senha'] = md5($nova);
                Pessoa::where('id',$id)->update($senhaNova);
                return redirect()->back()->with('senhaAlterada', 'Senha alterada com sucesso!!');
            }
            else{
                $validator = "A senha atual não coincide";
                if(Auth::user()->adm == true){
                    return redirect()->route('adm.perfil')->withErrors(['Senhavelha' => $validator])->withInput();
                }
                else{
                    return redirect()->route('login.perfil')->withErrors(['Senhavelha' => $validator])->withInput();
                 }   
        }}
        else if(Auth::user()->$campo != $contAlterado && $contAlterado != null )
        {
            Pessoa::where('id',$id)->update($dados_perfil);
           
            return redirect()->back();
      
        } 
        else if($campo == "escola")
         {
        $escolaAlt = $req['id_escola'];
        $dados_escola = array( 
        'id_escola' => $escolaAlt);
        if( Aluno::where('id_aluno',$id)->first())
        {
            Aluno::where('id_aluno',$id)->update($dados_escola);
        }
        else if( Professor::where('id_prof',$id)->first())
        {
            Professor::where('id_prof',$id)->update($dados_escola);
        }

        return redirect()->back();
        }
        else{
            return redirect()->back();
        }
    }
    
   

}

