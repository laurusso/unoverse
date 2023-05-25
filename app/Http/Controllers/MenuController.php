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
    public function parcerias() {
        return view("menu.parcerias");
        
    }

    // acesso a devs 
    public function devs() {
        return view("menu.devs");
        
    }
}
