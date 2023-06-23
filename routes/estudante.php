<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\Estudante\EstudanteController;





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

Route::prefix('estudante')->name('estudante.')->group(function(){
  
    Route::middleware(['guest:estudante','PreventBackHistory'])->group(function(){
        Route::view('/login','estudante.login')->name('login');
    //   Route::view('/register','ondjiva.estudante.register')->name('register');
       Route::get('/register',[EstudanteController::class,'register'])->name('register');
       Route::post('/create',[EstudanteController::class,'create'])->name('create');
       Route::post('/check',[EstudanteController::class,'check'])->name('check');
      
    });

    Route::middleware(['auth:estudante','PreventBackHistory'])->group(function(){
      
      //  Route::view('/home','ondjiva.estudante.home')->name('home');
      Route::post('/logout',[EstudanteController::class,'logout'])->name('logout');
      Route::get('/home',[EstudanteController::class,'home'])->name('home');
      Route::get('/enviar_mensagem',[EstudanteController::class,'enviar_mensagem'])->name('enviar_mensagem');
      Route::post('/fazer_chegar_mensagem_no_professor',[EstudanteController::class,'fazer_chegar_mensagem_no_professor'])->name('fazer_chegar_mensagem_no_professor');


      Route::get('/form',[EstudanteController::class,'form'])->name('form');
      Route::get('/ver_dados',[EstudanteController::class,'ver_dados'])->name('ver_dados');
      Route::post('/edit_inf',[EstudanteController::class,'edit_inf'])->name('edit_inf');

      Route::get('/relatar',[EstudanteController::class,'relatar'])->name('relatar');
      Route::get('/ver_relatos',[EstudanteController::class,'ver_relatos'])->name('ver_relatos');
      Route::post('/enviar_relato',[EstudanteController::class,'enviar_relato'])->name('enviar_relato');

      Route::get('/alterar_senha',[EstudanteController::class,'alterar_senha'])->name('alterar_senha');
      Route::post('/changePassword',[EstudanteController::class,'changePassword'])->name('changePassword');

      Route::get('/imprimir_boletim',[EstudanteController::class,'imprimir_boletim'])->name('imprimir_boletim');
      Route::get('/vida_escolar',[EstudanteController::class,'vida_escolar'])->name('vida_escolar');

      Route::get('/password',[EstudanteController::class,'password'])->name('password');
      Route::post('/changepasswords',[EstudanteController::class,'changepasswords'])->name('changepasswords');
      Route::get('/declara',[EstudanteController::class,'declara'])->name('declara');
      Route::post('/sol',[EstudanteController::class,'sol'])->name('sol');
      Route::get('/falta',[EstudanteController::class,'falta'])->name('falta');
      Route::get('/orientacao',[EstudanteController::class,'orientacao'])->name('orientacao');
      Route::get('/notificacao',[EstudanteController::class,'notificacao'])->name('notificacao');
      Route::get('/ver_declaracao',[EstudanteController::class,'ver_declaracao'])->name('ver_declaracao');
      Route::get('/mark',[EstudanteController::class,'mark'])->name('mark');
      Route::get('/horario',[EstudanteController::class,'horario'])->name('horario');
      
     Route::get('/alterar_senha',[EstudanteController::class,'alterar_senha'])->name('alterar_senha');
     Route::post('/alterar_s',[EstudanteController::class,'alterar_s'])->name('alterar_s');
    });

});



