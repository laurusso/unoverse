<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Escola;

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
    public function erro404() {
        return view("menu.erro404");
        
    }
    public function erro419() {
        return view("menu.erro419");
        
    }
    public function erro500() {
        return view("menu.erro500");
        
    }
    public function politica(){
        return view("links.politica");
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
            
            $escola = Escola::all();
            // dd($escola);
            return view("links.cadEstudante",compact('escola'));
            
        }
        public function cadProfessor() {
            $escola = Escola::all();
            return view("links.cadProfessor",compact('escola'));
            
        }


        public function teste() {
            return view("users.professor.conteudo");
            
        }
}
