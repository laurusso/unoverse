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
Route::get('/menu/acoes',['as'=>'menu.acoes','uses'=>'App\Http\Controllers\MenuController@acoes']);

// rota devs
Route::get('/menu/devs',['as'=>'menu.devs','uses'=>'App\Http\Controllers\MenuController@devs']);

//rota entrar (mudar quando o login for programado)
Route::get('/menu/entrar',['as'=>'menu.entrar','uses'=>'App\Http\Controllers\MenuController@entrar']);

Route::get('/menu/teste',['as'=>'menu.teste','uses'=>'App\Http\Controllers\MenuController@teste']);



/*rota temporaria */
Route::get('/links/cadCurioso',['as'=>'links.cadCurioso','uses'=>'App\Http\Controllers\MenuController@cadCurioso']);
Route::get('/links/cadEstudante',['as'=>'links.cadEstudante','uses'=>'App\Http\Controllers\MenuController@cadEstudante']);
Route::get('/links/cadProfessor',['as'=>'links.cadProfessor','uses'=>'App\Http\Controllers\MenuController@cadProfessor']);

//rota ADM  !!!dps  do login é necessário agrupar
Route::get('/adm/index',
['as'=>'adm.index','uses'=>'App\Http\Controllers\adm\AtividadeController@index']);
Route::get('/adm/lista',
['as'=>'adm.lista','uses'=>'App\Http\Controllers\adm\AtividadeController@lista']);
Route::get('/adm/adicionar',
['as'=>'adm.adicionar','uses'=>'App\Http\Controllers\adm\AtividadeController@adicionar']);

/* Rotas ainda não programadas no Controlador*/
Route::post('/adm/salvar',
['as'=>'adm.salvar','uses'=>'App\Http\Controllers\adm\AtividadeController@salvar']);
Route::get('/adm/editar/{id}',
['as'=>'adm.editar','uses'=>'App\Http\Controllers\adm\AtividadeController@editar']);
Route::put('/adm/atualizar/{id}',
['as'=>'adm.atualizar','uses'=>'App\Http\Controllers\adm\AtividadeController@atualizar']);
Route::get('/adm/excluir/{id}',
['as'=>'adm.excluir','uses'=>'App\Http\Controllers\adm\AtividadeController@excluir']);
