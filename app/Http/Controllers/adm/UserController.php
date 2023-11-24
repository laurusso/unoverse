<?php

namespace App\Http\Controllers\adm;

use App\Http\Controllers\Controller;
use App\Models\Pessoa;
use App\Models\Aluno;
use App\Models\Professor;
use App\Models\Escola;


class UserController extends Controller
{ 
    public function lista() {
        $linhas = Pessoa::all(); 
        $aluno = Aluno::all(); 
        $professor = Professor::all(); 
        $escola = Escola::all();

        return view ('adm.lista_usuarios',compact('linhas','aluno','professor','escola'));  
    }
 
    public function ativacaoUser($id,$acao)
    {
        if($acao == 'ativar')
        {
            $altera['ativo'] = true;
            
        }
        else  if($acao == 'desativar')
        {
            $altera['ativo'] = false;
        }
        Pessoa::where('id',$id)->update( $altera);
        return redirect()->back();
    }
}
