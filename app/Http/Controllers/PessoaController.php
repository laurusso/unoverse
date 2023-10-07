<?php     

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pessoa;
use App\Models\Aluno;
use App\Models\Professor;
use App\Models\Atividade;
use App\Models\Arquivo;


use Illuminate\Support\Facades\Log;
use Intervention\Image\Facades\Image;
//use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class PessoaController extends Controller
{
    public function cadastrar(Request $req){   
        //carrega view da home de adm   
       
        $dados_pessoa = $req->only(['email','senha','foto','nome','sobrenome','genero','curioso']);
        $senha =  $req->only(['senha']);
       // $dados_pessoa['senha'] = bcrypt($senha);
        $dados_pessoa['adm'] = false;
        
        $num = rand(1111,9999); // escolhe numero pra não repetir
        $dir = "user/"; // pasta onde armazena arquivos, localizada no projeto em: /public/atividades
        $ex = $req['foto']->guessClientExtension(); // pega extensão, jpg, png ...
        $nomeArquivo = "user".$num.".".$ex; // monta novo nome
        $req['foto']->move($dir,$nomeArquivo);//move o arquivo para  /public/atividades
       
        $dados_pessoa['foto'] = $dir . $nomeArquivo;
       
        Pessoa::create($dados_pessoa);
        //antes ajustar cript senha, foto

        $id_user = Pessoa::orderBy('id', 'desc') ->value('id'); //seleciona o ultimo id inserio em Atividades
        

        if($req->input('type_user') == "aluno")
        {    
            $dado = array(
                "id_aluno" => $id_user , 
                "email" => $req->input('email')
            );
          
             Aluno::create($dado);
        }
        else if($req->input('type_user') == "professor")
        {
            $dado = array (
                "id_prof" => $id_user , 
                "email" => $req->input('email')
            );
             Professor::create($dado);
        }
        $id_pessoa = Pessoa::orderBy('id', 'desc') ->value('id');
        Auth::loginUsingId($id_pessoa);
       
        return view('menu.home')->with('success', 'Cadastro realizado com sucesso! Agora você faz parte na familia <3');

    }
    public function index(){

        return view('menu.entrar');   
    }
    public function atividade(){
        $atvs = Atividade::all();
        $arq = Arquivo::all();
        return view('users.atividade',compact('atvs','arq'));   
    }  
   
    public function perfil(){
        $id = Auth::user()->id;   
        $user = Pessoa::where('id',$id)->first();
      
       if($user['foto'] == null)
       {
            $img = "user/Defaultuser.png";
       }
       else{
            $img = $user['foto'];
       }
        
        return view('menu.perfil',compact('user','img'));
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
            return redirect()->route('login.index')->withErrors(['error' => 'emailasdadasdad']);
        }
      
        if(!($req->input('senha') == $user->senha))
        //if(!password_verify($req->input('senha'), $user->senha))
        {
            return redirect()->route('login.index')->withErrors(['error' => 'email or password invalid']);

        }
      
       // Auth::loginUsingId($user->id_pessoa);
        Auth::loginUsingId($user->id);
      //  session()->get($user->id_pessoa);
      //  return redirect()->route('login.index')->with(['success','logged in']);
      if(Auth::user()->adm == true){
         return redirect()->route('adm.index')->with('success', 'Logged in');

      }
       else{
      return redirect()->route('menu.home')->with('success', 'Logged in');
       }
    }

    public function logout(){
        Auth::logout(); 
        session()->invalidate(); 

        
      
        return redirect('menu/entrar');

        
    }
}
