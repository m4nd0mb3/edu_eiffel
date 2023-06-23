<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\ConfigController;
//use App\Http\Controllers\Ondjiva\Estudante\OndjivaEController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/',[ConfigController::class,'index'])->name('welcome');
Route::get('/viewondjiva',[ConfigController::class,'viewondjiva'])->name('viewondjiva');
Route::get('/viewcaxito',[ConfigController::class,'viewcaxito'])->name('viewcaxito');
Route::get('/viewmalanje',[ConfigController::class,'viewmalanje'])->name('viewmalanje');
Route::get('/viewndalatando',[ConfigController::class,'viewndalatando'])->name('viewndalatando');

Route::get('/gerar_comprovativo',[ConfigController::class,'gerar_comprovativo'])->name('gerar_comprovativo');
Route::get('/login_usuarios',[ConfigController::class,'login_usuarios'])->name('login_usuarios');


Route::get('/funcionario',[ConfigController::class,'funcionario'])->name('funcionario');
Route::post('/adicionar',[ConfigController::class,'adicionar'])->name('adicionar');

Route::get('/info_qr',[ConfigController::class,'info_qr'])->name('info_qr');
Route::get('/inscricao_novo_estudante',[ConfigController::class,'inscricao_novo_estudante'])->name('inscricao_novo_estudante');
Route::get('/consulta_novo_estudante/{id}',[ConfigController::class,'consulta_novo_estudante'])->name('consulta_novo_estudante');
Route::post('/adicionar_novo_estudante',[ConfigController::class,'adicionar_novo_estudante'])->name('adicionar_novo_estudante');


Route::prefix('user')->name('user.')->group(function(){


    Route::middleware(['guest:web','PreventBackHistory'])->group(function(){
        Route::view('/login','dashboard.user.login')->name('login');
        Route::view('/register','dashboard.user.register')->name('register');
        Route::post('/create',[UserController::class,'create'])->name('create');
        Route::post('/check',[UserController::class,'check'])->name('check');
    });


    Route::middleware(['auth:web','PreventBackHistory'])->group(function(){
      
        Route::post('/logout',[UserController::class,'logout'])->name('logout');
        Route::get('/home',[UserController::class,'home'])->name('home');
     //   Route::view('/home','dashboard.user.home')->name('home');
        Route::post('/disciplina',[UserController::class,'disciplina'])->name('disciplina');
        Route::post('/turma',[UserController::class,'turma'])->name('turma');
        Route::post('/classe',[UserController::class,'classe'])->name('classe');
        Route::post('/liceu',[UserController::class,'liceu'])->name('liceu');
        Route::post('/typeprova',[UserController::class,'typeprova'])->name('typeprova');
        Route::post('/typefalta',[UserController::class,'typefalta'])->name('typefalta');
        Route::post('/typedoc',[UserController::class,'typedoc'])->name('typedoc');

        
    });

});

Route::prefix('user')->name('user.')->group(function(){


    Route::middleware(['guest:web','PreventBackHistory'])->group(function(){
        Route::view('/login','dashboard.user.login')->name('login');
        Route::view('/register','dashboard.user.register')->name('register');
        Route::post('/create',[UserController::class,'create'])->name('create');
        Route::post('/check',[UserController::class,'check'])->name('check');
    });


    Route::middleware(['auth:web','PreventBackHistory'])->group(function(){
      
        Route::post('/logout',[UserController::class,'logout'])->name('logout');
        Route::view('/home','dashboard.user.home')->name('home');
        Route::post('/disciplina',[UserController::class,'disciplina'])->name('disciplina');
        Route::post('/turma',[UserController::class,'turma'])->name('turma');
        Route::post('/classe',[UserController::class,'classe'])->name('classe');
        Route::post('/liceu',[UserController::class,'liceu'])->name('liceu');
        Route::post('/typeprova',[UserController::class,'typeprova'])->name('typeprova');
        Route::post('/typefalta',[UserController::class,'typefalta'])->name('typefalta');

        
    });

});

require __DIR__ . '/super.php';
require __DIR__ . '/estudante.php';
require __DIR__ . '/professor.php';
require __DIR__ . '/administrativo.php';
require __DIR__ . '/biblioteca.php';
require __DIR__ . '/gabinete.php';
require __DIR__ . '/geral.php';
require __DIR__ . '/pais.php';
require __DIR__ . '/pedagogico.php';
require __DIR__ . '/secretaria_administrativa.php';
require __DIR__ . '/secretaria_geral.php';
require __DIR__ . '/secretaria_pedagogica.php';
require __DIR__ . '/coordenador.php';
require __DIR__ . '/tecnico.php';