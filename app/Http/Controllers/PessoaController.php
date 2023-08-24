<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pessoa;
use App\Models\Aluno;
use App\Models\Professor;

use Illuminate\Support\Facades\Auth;
class PessoaController extends Controller
{
    public function cadastrar(Request $req){   
        //carrega view da home de adm
       
        $dados_pessoa = $req->only(['email','senha','foto','nome','sobrenome','genero','curioso']);
        $senha =  $req->only(['senha']);
       // $dados_pessoa['senha'] = bcrypt($senha);
        $dados_pessoa['adm'] = false;

       // dd($req->input('type_user') == 'aluno' );
        Pessoa::create($dados_pessoa);
        //antes ajustar cript senha, foto

        $id_user = Pessoa::orderBy('id', 'desc') ->value('id'); //seleciona o ultimo id inserio em Atividades
        //    dd($req->only(['type_user']));
      
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
        /*else if($req->only(['curioso']) == true)
        {

        }*/
       
        return view('menu.home')->with('success', 'Cadastro realizado com sucesso! Agora você faz parte na familia <3');

    }
    public function index(){

        return view('menu.entrar');
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
        return redirect()->route('menu.home')->with('success', 'Logged in');

        
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login.index');
     
    }
}
