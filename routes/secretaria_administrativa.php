

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\Secretaria\SecretarioController;





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


Route::prefix('secretaria_administrativa')->name('secretaria_administrativa.')->group(function(){
  
  Route::middleware(['guest:secretaria_administrativa','PreventBackHistory'])->group(function(){
      Route::view('/login','secretaria.login')->name('login');
  //   Route::view('/register','ondjiva.secretaria.register')->name('register');
      Route::post('/create',[SecretarioController::class,'create'])->name('create');
      Route::post('/check',[SecretarioController::class,'check'])->name('check');


      Route::get('/register',[SecretarioController::class,'register'])->name('register');
      Route::post('/registar',[SecretarioController::class,'registar'])->name('registar');

  });

  Route::middleware(['auth:secretaria_administrativa','PreventBackHistory'])->group(function(){
  //    Route::get('/home','ondjiva.secretaria.home')->name('home');
      Route::post('/logout',[SecretarioController::class,'logout'])->name('logout');
      Route::get('/home',[SecretarioController::class,'home'])->name('home');
      Route::get('/professores',[SecretarioController::class,'professores'])->name('professores');
      Route::get('/falta_professores',[SecretarioController::class,'falta_professores'])->name('falta_professores');
      Route::post('/falta_professor',[SecretarioController::class,'falta_professor'])->name('falta_professor');
      Route::get('/ver_falta',[SecretarioController::class,'ver_falta'])->name('ver_falta');
      Route::get('/ver_festudante',[SecretarioController::class,'ver_festudante'])->name('ver_festudante');
      Route::get('/declaracoes_professores',[SecretarioController::class,'declaracoes_professores'])->name('declaracoes_professores');
      Route::get('/declaracoes_estudantes',[SecretarioController::class,'declaracoes_estudantes'])->name('declaracoes_estudantes');
      Route::get('/estudantes',[SecretarioController::class,'estudantes'])->name('estudantes');
      //ver
      Route::get('/turma_a/{liceu}/{classe}',[SecretarioController::class,'turma_a'])->name('turma_a');
      Route::get('/ver_turma_as/{id}',[SecretarioController::class,'ver_turma_as'])->name('ver_turma_as');

      Route::get('/alterar_senha',[SecretarioController::class,'alterar_senha'])->name('alterar_senha');
      Route::post('/alterar_s',[SecretarioController::class,'alterar_s'])->name('alterar_s');
   

      //Faltas
      Route::get('/falta',[SecretarioController::class,'falta'])->name('falta');

      Route::get('/decima_A',[SecretarioController::class,'decima_A'])->name('decima_A');
      Route::post('/dec_A',[SecretarioController::class,'dec_A'])->name('dec_A');
   
      Route::get('/decima_B',[SecretarioController::class,'decima_B'])->name('decima_B');
      Route::post('/dec_B',[SecretarioController::class,'dec_B'])->name('dec_B');

      Route::get('/decimap_A',[SecretarioController::class,'decimap_A'])->name('decimap_A');
      Route::post('/dep_A',[SecretarioController::class,'dep_A'])->name('dep_A');

      Route::get('/decimap_B',[SecretarioController::class,'decimap_B'])->name('decimap_B');
      Route::post('/dep_B',[SecretarioController::class,'dep_B'])->name('dep_B');

      Route::get('/decimas_A',[SecretarioController::class,'decimas_A'])->name('decimas_A');
      Route::post('/des_A',[SecretarioController::class,'des_A'])->name('des_A');

      Route::get('/decimas_B',[SecretarioController::class,'decimas_B'])->name('decimas_B');
      Route::post('/des_B',[SecretarioController::class,'des_B'])->name('des_B');

      Route::get('/notificacao',[SecretarioController::class,'notificacao'])->name('notificacao');
      Route::get('/enviar_formacao',[SecretarioController::class,'enviar_formacao'])->name('enviar_formacao');
      Route::get('/ver_formacao',[SecretarioController::class,'ver_formacao'])->name('ver_formacao');
      Route::post('/formacao',[SecretarioController::class,'formacao'])->name('formacao');

      Route::get('/funcionario',[SecretarioController::class,'funcionario'])->name('funcionario');
      Route::get('/f_funcionario',[SecretarioController::class,'f_funcionario'])->name('f_funcionario');
      Route::get('/ver_faltaf',[SecretarioController::class,'ver_faltaf'])->name('ver_faltaf');
      Route::post('/falta_funcionario',[SecretarioController::class,'falta_funcionario'])->name('falta_funcionario');

      Route::get('/ver_dado_estudante/{id}',[SecretarioController::class, 'ver_dado_estudante'])->name('ver_dado_estudante');;
      Route::get('/ver_dado_professor/{id}',[SecretarioController::class, 'ver_dado_professor'])->name('ver_dado_professor');;
     

      Route::get('/form',[SecretarioController::class,'form'])->name('form');
      Route::get('/ver_dados',[SecretarioController::class,'ver_dados'])->name('ver_dados');
      Route::post('/edit_inf',[SecretarioController::class,'edit_inf'])->name('edit_inf');

    //  Route::get('/home',[SecretarioController::class,'home'])->name('home');
      

  });

});
