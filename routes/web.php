<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ConteudoController;
use App\Http\Controllers\PessoaController;
use App\Http\Controllers\adm\AtividadeController;
use App\Http\Controllers\adm\ExercicioController;
use App\Http\Controllers\adm\UserController;
use App\Http\Controllers\auth\GoogleAuthController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\adm\EscolaController;
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



/**   ROTAS PARA O MENU    **/
//Home
Route::get('/menu/home', [MenuController::class, 'home'])->name('menu.home');
//Modulos
Route::get('/menu/modulos',['as'=>'menu.modulos','uses'=>'App\Http\Controllers\MenuController@modulos']);
//rotas de paginas de erros
Route::get('/menu/erro404',['as'=>'menu.erro404','uses'=>'App\Http\Controllers\MenuController@erro404']);
Route::get('/menu/erro419',['as'=>'menu.erro419','uses'=>'App\Http\Controllers\MenuController@erro419']);
Route::get('/menu/erro500',['as'=>'menu.erro500','uses'=>'App\Http\Controllers\MenuController@erro500']);
// rota parcerias
Route::get('/menu/acoes',['as'=>'menu.acoes','uses'=>'App\Http\Controllers\MenuController@acoes']);
// rota devs
Route::get('/menu/devs',['as'=>'menu.devs','uses'=>'App\Http\Controllers\MenuController@devs']);
//Rota política de privacidade
Route::get('/links/politica', [MenuController::class, 'politica'])->name('links.politica');
//Modulos
//rota entrar (mudar quando o login for programado)
//Route::get('/menu/entrar',['as'=>'menu.entrar','uses'=>'App\Http\Controllers\MenuController@entrar']);
//rota Cadastro
Route::get('/menu/menuCad',['as'=>'menu.menuCad','uses'=>'App\Http\Controllers\MenuController@menuCad']);

Route::get('/users/professor/conteudo',['as'=>'menu.conteudo','uses'=>'App\Http\Controllers\MenuController@teste']);


Route::get('/menu/', [PessoaController::class, 'redirecionaAtv'])->name('perfil.atividade');

Route::get('/users/logadaAluno/{nivel}', [PessoaController::class, 'nivelAtvAluno'])->name('atvAluno.nivel');

Route::get('/users/logadaCurioso/{nivel}', [PessoaController::class, 'nivelAtvCurioso'])->name('atvCurioso.nivel');
Route::get('/users/logadaProfessor/{nivel}', [PessoaController::class, 'nivelAtvProfessor'])->name('atvProfessor.nivel');





//Rota login

//Route::get('/menu/entrar', [MenuController::class, 'entrar'])->name('menu.entar');
Route::post('/menu/entrar', [PessoaController::class, 'login'])->name('login')->middleware('user');

Route::controller(PessoaController::class)->group(function(){
    Route::get('menu/entrar', 'index')->name('login.index');
    Route::post('menu/entrar', 'login')->name('login.login'); 
    Route::get('menu/logout', 'logout')->name('login.logout');

});

/*rota temporaria */
Route::get('/links/cadCurioso',['as'=>'links.cadCurioso','uses'=>'App\Http\Controllers\MenuController@cadCurioso']);
Route::get('/links/cadEstudante',['as'=>'links.cadEstudante','uses'=>'App\Http\Controllers\MenuController@cadEstudante']);
Route::get('/links/cadProfessor',['as'=>'links.cadProfessor','uses'=>'App\Http\Controllers\MenuController@cadProfessor']);

/*Route::get('pessoa',
['as'=>'cadastrar','uses'=>'App\Http\Controllers\PessoaController@cadastrar']);*/
Route::get('/pessoa', [PessoaController::class, 'cadastrar'])->name('cadastrar');
Route::post('/links/cadEstudante/', [RegisterController::class, 'register'])->name('registrar');
Route::post('/email/verificaEmail/', [RegisterController::class, 'ConfirmCode'])->name('confirmar.code');
 
  
Route::get('/users/professor/teste', [ConteudoController::class, 'listar'])->name('user.conteudo');
 
Route::get('/users/perfil', [PessoaController::class, 'perfil'])->name('login.perfil');
Route::get('/adm/perfiladm', [PessoaController::class, 'perfilAdm'])->name('adm.perfil');

// Route::get('/users/atividade/{codigo}', [PessoaController::class, 'lercode'])->name('code.ler');
// Route::get('/users/mostra/', [PessoaController::class, 'atividade']);
Route::get('/users/boxcode/{num}', [PessoaController::class, 'lercode'])->name('code.ler');


//Route::get('/users/boxcode', [PessoaController::class, 'boxcode']); 
//rota ADM  !!!dps  do login é necessário agrupar


Route::middleware('adm')->group(function(){
Route::get('/adm/index',
['as'=>'adm.index','uses'=>'App\Http\Controllers\adm\AtividadeController@index']);
Route::get('/adm/lista',
['as'=>'adm.lista','uses'=>'App\Http\Controllers\adm\AtividadeController@lista']);  
Route::get('/adm/adicionar',
['as'=>'adm.adicionar','uses'=>'App\Http\Controllers\adm\AtividadeController@adicionar']); 
Route::post('/adm/salvar',
['as'=>'adm.salvar','uses'=>'App\Http\Controllers\adm\AtividadeController@salvar']);
Route::get('/adm/editar/{num}',
['as'=>'adm.editar','uses'=>'App\Http\Controllers\adm\AtividadeController@editar']);
Route::post('/adm/atualizar/{num}',
['as'=>'adm.atualizar','uses'=>'App\Http\Controllers\adm\AtividadeController@atualizar']); 
Route::get('/adm/excluir/{num}',
['as'=>'adm.excluir','uses'=>'App\Http\Controllers\adm\AtividadeController@excluir']);


//adm lista user  
Route::get('/adm/lista_usuarios', [UserController::class, 'lista'])->name('lista.user');  

Route::get('/adm/exercicio/ExerDestino', [ExercicioController::class, 'mostraDestino'])->name('adm.mostraDestino');
Route::post('/adm/exercicio/ExerDestino', [ExercicioController::class, 'DestinoExercicio'])->name('adm.destinaExercicio');

Route::post('/adm/exercicio/cadastra', [ExercicioController::class, 'salvaExercicio'])->name('adm.salvaExercicio');
Route::get('/adm/exercicio/lista/{num}', [ExercicioController::class, 'listaExercicio'])->name('adm.exercicio.lista');
Route::get('/adm/exercicio/editar/{id_exercicio}', [ExercicioController::class, 'editarExercicio'])->name('adm.exercicio.editar');
Route::get('/adm/exercicio/excluir/{id_exercicio}', [ExercicioController::class, 'excluirExercicio'])->name('adm.exercicio.excluir');
Route::post('/adm/exercicio/atualizar/{id_exercicio}', [ExercicioController::class, 'atualizarExercicio'])->name('adm.exercicio.atualizar');

 
 
Route::get('/adm/escola/add_escola', [EscolaController::class, 'AdicionarEscola'])->name('adicionar.escola');
Route::post('/adm/escola/form_escola', [EscolaController::class, 'SalvarEscola'])->name('adm.salvar.escola');
Route::get('/adm/escola/lista', [EscolaController::class, 'listaEscola'])->name('adm.lista.escola');
Route::get('/adm/escola/editar/{codigo_escola}', [EscolaController::class, 'editarEscola'])->name('adm.escola.editar');
Route::get('/adm/escola/excluir/{codigo_escola}', [EscolaController::class, 'excluirEscola'])->name('adm.escola.excluir');
Route::post('/adm/escola/atualizar/{codigo_escola}', [EscolaController::class, 'atualizarEscola'])->name('adm.escola.atualizar');

});  
Route::get('/adm/trem',['as'=>'adm.tren','uses'=>'App\Http\Controllers\adm\AtividadeController@trem'])->middleware('adm');  

Route::get('/users/atividade',['as'=>'users.atividade','uses'=>'App\Http\Controllers\PessoaController@atividades']);   

Route::get('/users/logadaCurioso', [PessoaController::class, 'logadoCurioso'])->name('log.curioso');
Route::get('/users/logadaAluno', [PessoaController::class, 'logadoAluno'])->name('log.aluno');
Route::get('/users/logadaProfessor', [PessoaController::class, 'logadoProfessor'])->name('log.professor');


Route::post('/perfil/edit', [PessoaController::class, 'editPerfil'])->name('edit.perfil');
Route::get('/email/{id}/{nome}/{email}', [RegisterController::class, 'novoEmail'])->name('edit.novo.email');
Route::post('/menu/perfil/atualizar', [PessoaController::class, 'atualizaPerfil'])->name('atualizar.perfil');
Route::post('/menu/perfil/email/code', [RegisterController::class, 'novoEmailPerfil'])->name('confirmar.email.code');

Route::get('/menu/users/exercicio/{num}', [PessoaController::class, 'MostraExercicio'])->name('mostra.exercicio');
Route::get('/adm/users/ativacao/{id}/{acao}', [UserController::class, 'ativacaoUser'])->name('adm.user.ativacao');