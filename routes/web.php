<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

//chamada da home
Route::get('/', function () {
    return view('menu.home');
});

// Route::get('Modulos', function ()
// {
//     return view('modulos');
// });

// ROTAS PARA O MENU    
// rota home
Route::get('/menu/home',['as'=>'menu.home','uses'=>'App\Http\Controllers\MenuController@home']);

// rota modulos
Route::get('/menu/modulos',['as'=>'menu.modulos','uses'=>'App\Http\Controllers\MenuController@modulos']);

// rota parcerias
Route::get('/menu/parcerias',['as'=>'menu.parcerias','uses'=>'App\Http\Controllers\MenuController@parcerias']);

// rota devs
Route::get('/menu/devs',['as'=>'menu.devs','uses'=>'App\Http\Controllers\MenuController@devs']);

//rota entrar (mudar quando o login for programado)
Route::get('/menu/entrar',['as'=>'menu.entrar','uses'=>'App\Http\Controllers\MenuController@entrar']);
