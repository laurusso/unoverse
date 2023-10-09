<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ConteudoController;

use App\Http\Controllers\PessoaController;

use App\Http\Controllers\adm\AtividadeController;

use App\Http\Controllers\adm\UserController;
use App\Models\Pessoa;

// use App\Http\Middleware\Auth\AdmAcess;
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
//Route::get('/menu/home',['as'=>'menu.home','uses'=>'App\Http\Controllers\MenuController@home']);
//Route::get('/menu/home', [MenuController::class, 'funcao'])->name('nome da rota');
Route::get('/menu/home', [MenuController::class, 'home'])->name('menu.home');
/*
Route::get('/menu/home', function() {
    return view('menu.home')->name('menu.home');
});*/
// rota modulos
Route::get('/menu/modulos',['as'=>'menu.modulos','uses'=>'App\Http\Controllers\MenuController@modulos']);

// rota parcerias
Route::get('/menu/acoes',['as'=>'menu.acoes','uses'=>'App\Http\Controllers\MenuController@acoes']);

// rota devs
Route::get('/menu/devs',['as'=>'menu.devs','uses'=>'App\Http\Controllers\MenuController@devs']);

//rota entrar (mudar quando o login for programado)
//Route::get('/menu/entrar',['as'=>'menu.entrar','uses'=>'App\Http\Controllers\MenuController@entrar']);

//rota Cadastro
Route::get('/menu/menuCad',['as'=>'menu.menuCad','uses'=>'App\Http\Controllers\MenuController@menuCad']);

Route::get('/users/professor/conteudo',['as'=>'menu.conteudo','uses'=>'App\Http\Controllers\MenuController@teste']);







//Rota login

//Route::get('/menu/entrar', [MenuController::class, 'entrar'])->name('menu.entar');
Route::post('/menu/entrar', [PessoaController::class, 'login'])->name('login');

Route::controller(PessoaController::class)->group(function(){
    Route::get('menu/entrar', 'index')->name('login.index');
    Route::post('menu/entrar', 'login')->name('login.login');
    Route::get('menu/logout', 'logout')->name('login.logout');

});

/*rota temporaria */
Route::get('/links/cadCurioso',['as'=>'links.cadCurioso','uses'=>'App\Http\Controllers\MenuController@cadCurioso']);
Route::get('/links/cadEstudante',['as'=>'links.cadEstudante','uses'=>'App\Http\Controllers\MenuController@cadEstudante']);
Route::get('/links/cadProfessor',['as'=>'links.cadProfessor','uses'=>'App\Http\Controllers\MenuController@cadProfessor']);

Route::post('pessoa',
['as'=>'cadastrar','uses'=>'App\Http\Controllers\PessoaController@cadastrar']);

Route::get('/users/professor/teste', [ConteudoController::class, 'listar'])->name('user.conteudo');

Route::get('/users/perfil', [PessoaController::class, 'perfil'])->name('login.perfil');

Route::get('/users/atividade/{codigo}', [PessoaController::class, 'lercode'])->name('code.ler');

//rota ADM  !!!dps  do login é necessário agrupar


//Route::middleware(['adm'])->group(function(){
Route::get('/adm/index',
['as'=>'adm.index','uses'=>'App\Http\Controllers\adm\AtividadeController@index'])->middleware('adm');
Route::get('/adm/lista',
['as'=>'adm.lista','uses'=>'App\Http\Controllers\adm\AtividadeController@lista'])->middleware('adm');  
// Route::get('/adm/lista_usuarios',
// ['as'=>'adm.lista_usuarios','uses'=>'App\Http\Controllers\adm\UserController@lista'])->middleware('adm');
Route::get('/adm/adicionar',
['as'=>'adm.adicionar','uses'=>'App\Http\Controllers\adm\AtividadeController@adicionar'])->middleware('adm'); 
Route::post('/adm/salvar',
['as'=>'adm.salvar','uses'=>'App\Http\Controllers\adm\AtividadeController@salvar'])->middleware('adm');
Route::get('/adm/editar/{num}',
['as'=>'adm.editar','uses'=>'App\Http\Controllers\adm\AtividadeController@editar'])->middleware('adm');
Route::put('/adm/atualizar/{num}',
['as'=>'adm.atualizar','uses'=>'App\Http\Controllers\adm\AtividadeController@atualizar'])->middleware('adm');
Route::get('/adm/excluir/{num}',
['as'=>'adm.excluir','uses'=>'App\Http\Controllers\adm\AtividadeController@excluir'])->middleware('adm');


//adm lista user
Route::get('/adm/lista_usuarios', [UserController::class, 'lista'])->name('lista.user')->middleware('adm');

 
Route::get('/adm/trem',['as'=>'adm.tren','uses'=>'App\Http\Controllers\adm\AtividadeController@trem'])->middleware('adm');  
// Route::get('/adm/trem/{num}', [AtividadeController::class, 'ler'])->name('adm.ler');
// Route::get('/adm/trem/{code}', [AtividadeController::class, 'ler'])->name('adm.ler');

Route::get('/users/atividade',['as'=>'users.atividade','uses'=>'App\Http\Controllers\PessoaController@atividade']);         