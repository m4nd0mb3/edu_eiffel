

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\Secretaria\SecretarioGeralController;


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







Route::prefix('secretaria_geral')->name('secretaria_geral.')->group(function(){
  
  Route::middleware(['guest:secretaria_geral','PreventBackHistory'])->group(function(){
      Route::view('/login','sgeral.login')->name('login');
  //   Route::view('/register','ondjiva.secretaria.register')->name('register');
      Route::post('/create',[SecretarioGeralController::class,'create'])->name('create');
      Route::post('/check',[SecretarioGeralController::class,'check'])->name('check');
      
      Route::get('/register',[SecretarioGeralController::class,'register'])->name('register');
      Route::post('/registar',[SecretarioGeralController::class,'registar'])->name('registar');

  });
  
  Route::middleware(['auth:secretaria_geral','PreventBackHistory'])->group(function(){
   //   Route::view('/home','ondjiva.sgeral.home')->name('home');
      Route::post('/logout',[SecretarioGeralController::class,'logout'])->name('logout');
      Route::get('/home',[SecretarioGeralController::class,'home'])->name('home');
      Route::get('/professores',[SecretarioGeralController::class,'professores'])->name('professores');
      Route::get('/professores_show',[SecretarioGeralController::class,'professores_show'])->name('professores_show');
      Route::get('/falta_professores',[SecretarioGeralController::class,'falta_professores'])->name('falta_professores');
      Route::post('/falta_professor',[SecretarioGeralController::class,'falta_professor'])->name('falta_professor');
      Route::get('/ver_falta',[SecretarioGeralController::class,'ver_falta'])->name('ver_falta');
      Route::get('/ver_festudante',[SecretarioGeralController::class,'ver_festudante'])->name('ver_festudante');
      Route::get('/declaracoes_professores',[SecretarioGeralController::class,'declaracoes_professores'])->name('declaracoes_professores');
      Route::get('/declaracoes_estudantes',[SecretarioGeralController::class,'declaracoes_estudantes'])->name('declaracoes_estudantes');
      Route::get('/estudantes',[SecretarioGeralController::class,'estudantes'])->name('estudantes');
      Route::get('/funcionario',[SecretarioGeralController::class,'funcionario'])->name('funcionario');
      //ver
     // Route::get('/turma_a',[SecretarioGeralController::class,'turma_a'])->name('turma_a');
      Route::get('/turma_a/{liceu}/{classe}',[SecretarioGeralController::class,'turma_a'])->name('turma_a');
      Route::get('/ver_turma_as/{id}',[SecretarioGeralController::class,'ver_turma_as'])->name('ver_turma_as');
  

      //Faltas
      Route::get('/falta',[SecretarioGeralController::class,'falta'])->name('falta');

      Route::get('/horario',[SecretarioGeralController::class,'horario'])->name('horario');
      Route::post('/enviar_horario',[SecretarioGeralController::class,'enviar_horario'])->name('enviar_horario');

      Route::get('/falta',[SecretarioGeralController::class,'falta'])->name('falta');
      Route::get('/decima_A/{liceu}/{classe}',[SecretarioGeralController::class,'decima_A'])->name('decima_A');

      Route::post('/dec_A/{liceu}/{classe}',[SecretarioGeralController::class,'dec_A'])->name('dec_A');

      Route::get('/ver_falta_estudante/{liceu}',[SecretarioGeralController::class,'ver_falta_estudante'])->name('ver_falta_estudante');
      Route::get('/ver_info_falta_estudante/{classe}',[SecretarioGeralController::class,'ver_info_falta_estudante'])->name('ver_info_falta_estudante');
      Route::get('/ver_info_falta_total_estudante/{liceu}/{classe}/{id}',[SecretarioGeralController::class,'ver_info_falta_total_estudante'])->name('ver_info_falta_total_estudante');
    
      Route::get('/notificacao',[SecretarioGeralController::class,'notificacao'])->name('notificacao');

      Route::get('/ver_nota',[SecretarioGeralController::class,'ver_nota'])->name('ver_nota');

    //  Route::get('/home',[SecretarioController::class,'home'])->name('home');

    Route::get('/ver_dado_estudante/{id}',[SecretarioGeralController::class, 'ver_dado_estudante'])->name('ver_dado_estudante');
    Route::get('/ver_dado_professor/{id}',[SecretarioGeralController::class, 'ver_dado_professor'])->name('ver_dado_professor');
      
    Route::get('/alterar_senha',[SecretarioGeralController::class,'alterar_senha'])->name('alterar_senha');
      Route::post('/alterar_s',[SecretarioGeralController::class,'alterar_s'])->name('alterar_s');
   

    Route::get('/form',[SecretarioGeralController::class,'form'])->name('form');
    Route::get('/ver_dados',[SecretarioGeralController::class,'ver_dados'])->name('ver_dados');
    Route::post('/edit_inf',[SecretarioGeralController::class,'edit_inf'])->name('edit_inf');

  });

});
