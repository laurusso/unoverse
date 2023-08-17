<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pessoa;

class LoginController extends Controller
{
    //
    public function login(Request $req)
    {
       $pessoa = Pessoa::select('email','senha');
        foreach($pessoa as $dado)
        {
           if($dado['email'] == $req->only(['email']))
           {
                $email = $dado['email'];
                $senha =  $dado['senha'];
                break;

           }
       
        }/*
        if(Auth::attempt($email =>$dados['email'],'password'=>$dados['senha']]))
{ // redireciona para a home mas agora logado
return redirect()->route('site.home');
} else { // pede usuario e senha novamente
return redirect()->route('login.index');
}
       */
       return redirect()->route('menu.home');

    }
}
