<?php

namespace App\Http\Controllers\adm;

use App\Http\Controllers\Controller;
use App\Models\Pessoa;


class UserController extends Controller
{ 
    public function lista() {
        $linhas = Pessoa::all(); 
        return view ('adm.lista_usuarios',compact('linhas'));  
    }
  
}
