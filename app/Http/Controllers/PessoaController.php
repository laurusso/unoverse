<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pessoa;
class PessoaController extends Controller
{
    public function cadastrar(Request $req){   
        //carrega view da home de adm
        /* MUDAR MIGRATE PARA CAMPO FOTO SER TIPO FILE */
      //  $dados_pessoa = $req->only(['email','senha','foto','nome','sobrenome','genero','curioso']);]
        //antes ajustar cript senha, foto
        Pessoa::create($dados_pessoa);
       
    }

}
