<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
    use Illuminate\Support\Str;
    use Illuminate\Support\Facades\Mail;
    use App\Mail\ConfirmationEmail;
    use App\Mail\ConfirmationNovoEmail;
use App\Models\Pessoa;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller 
{


public function register(Request $request)
{
    $hasEmail = Pessoa::where('email', $request->input('email'))->first();

    if ($hasEmail) {
        // O email já existe no banco de dados
        return redirect('/menu/entrar')->with('email_exists', 'O email já está cadastrado. Faça login.');
    }
    
    $validator = Validator::make($request->all(), [
        'password' => 'required|min:5',
    ], [
        'password.min' => 'As senhas devem possuir mais de 5 caracteres',
    ]);
    // Se a validação falhar, adicione os erros à sessão e redirecione de volta ao formulário
    if ($validator->fails()) {

        if($request['typeuser'] == 'estudante')
        { return redirect() ->route('links.cadEstudante')->withErrors($validator)->withInput(); }
        else if($request['typeuser'] == 'curioso')
        { return redirect() ->route('links.cadCurioso')->withErrors($validator)->withInput(); }
        else if($request['typeuser'] == 'professor')
        { return redirect() ->route('links.cadProfessor')->withErrors($validator)->withInput(); }
       
    }
    if($request['password'] != $request['password-confirmation'])
    {   $validator = "As senhas não coincidem"; 
        return redirect()->back()->withErrors(['password-confirmation' => $validator])->withInput();}
    // Registre o usuário e associe o código de confirmação gerado aleatoriamente.

    
    if($request->hasFile('foto'))
    {
        $num = rand(1111,9999); // escolhe numero pra não repetir
        $dir = "user/"; // pasta onde armazena arquivos, localizada no projeto em: /public/atividades
        $ex = $request['foto']->guessClientExtension(); // pega extensão, jpg, png ...
        $nomeArquivo = "user".$num.".".$ex; // monta novo nome
        $request['foto']->move($dir,$nomeArquivo);//move o arquivo para  /public/atividades
       
        $fotouser = $dir . $nomeArquivo;
       
    }
    else{
        if($request->input('typeuser') == "aluno")
        { 
            $fotouser = "user/default/perfilEstudante.svg";
        }
        else if($request->input('typeuser') == "professor")
        {
            $fotouser = "user/default/perfilProfessor.svg";
        }
        if($request->input('curioso') == "true")
        {
            $fotouser = "user/default/perfilCurioso.svg";
        }
    }

    $user = array(
        'nome' => $request->input('nome'),
        'email' => $request->input('email'),
        'senha' => $request->input('password'),
        'sobrenome' => $request->input('sobrenome'),
        'foto' => $fotouser,
        'genero' => $request->input('genero'),
        'curioso' => $request->input('curioso'),
        'codigo_escola' => $request->input('codescola'),
        'typeuser' => $request->input('typeuser'),
         
    ); 
    $email = $request->input('email');
    //dd($user);
    $confirmationCode =  mt_rand(10000, 99999); // Gere um código aleatório

    // Envie um e-mail de confirmação.
    Mail::to($email)->send(new ConfirmationEMail($user,$confirmationCode));
    return view('email.verificaEmail',compact('user', 'confirmationCode'));

    // Redirecione o usuário para uma página de confirmação ou exiba uma mensagem de sucesso.
}


public function novoEmail(Request $req)
{
   
    $user = array(
        'id' => $req['id'],
        'nome' => $req['nome'],
        'email' => $req['email'],  
    ); 
   
    
   $email = $req['email'];

    $confirmationCode =  mt_rand(10000, 99999); // Gere um código aleatório

    // Envie um e-mail de confirmação.
    Mail::to($email)->send(new ConfirmationNovoEmail($user, $confirmationCode));
    return view('email.verificaNovoEmail',compact('user', 'confirmationCode'));

    // Redirecione o usuário para uma página de confirmação ou exiba uma mensagem de sucesso.
}

public function ConfirmCode(Request $req){
   //dd($req->input('codeUser'));
    //$userData = json_decode($req->input('user'), true);
    $user = $req->only('nome','email','senha','sobrenome','foto','genero','curioso','codigo_escola','type_user');
    if($req->input('codeUser') == $req->input('confirmationCode'))
    {
        $req->session()->put('user', $user);
        return redirect()->route('cadastrar');
                   
    }
    else{
        return view('menu.menuCad');
    }
   
}

public function novoEmailPerfil(Request $req){
    if($req->input('codeEmail') == $req->input('confirmationCode'))
    {

        
        $id = $req['id'];
        $novoEmail['email'] =  $req['email'];
        Pessoa::where('id',$id)->update($novoEmail);
       
    }
    return redirect()->route('login.perfil');
}


}
