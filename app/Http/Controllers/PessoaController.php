<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pessoa;
class PessoaController extends Controller
{
    public function cadastrar(Request $req){   
        //carrega view da home de adm
       
        $dados_pessoa = $req->only(['email','senha','foto','nome','sobrenome','genero','curioso']);
        $senha =  $req->only(['senha']);
       // $dados_pessoa['senha'] = bcrypt($senha);
        $dados_pessoa['adm'] = false;
        Pessoa::create($dados_pessoa);
        //antes ajustar cript senha, foto
        return view('menu.home')->with('success', 'Cadastro realizado com sucesso! Agora você faz parte na familia <3');

    }

}
