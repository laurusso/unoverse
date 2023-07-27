<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Menu;

class MenuController extends Controller
{
    // ACESSO AS VISOES
    // acesso a home
    public function home() {
        return view("menu.home");
        
    }

    // acesso a modulos
    public function modulos() {
        return view("menu.modulos");
        
    }

    // acesso a parcerias
    public function acoes() {
        return view("menu.acoes");
        
    }

    // acesso a devs 
    public function devs() {
        return view("menu.devs");
        
    }
    //acesso a entrar
    public function entrar() {
        return view("menu.entrar");
        
    }
    //acesso a cadastro
    public function menuCad() {
        return view("menu.menuCad");
        
    }
        //acesso a nada teste 
        public function cadCurioso() {
            return view("links.cadCurioso");
            
        }
        public function cadEstudante() {
            return view("links.cadEstudante");
            
        }
        public function cadProfessor() {
            return view("links.cadProfessor");
            
        }
}
