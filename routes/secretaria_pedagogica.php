

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\Secretaria\SPedagogicoController;





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




Route::prefix('secretaria_pedagogica')->name('secretaria_pedagogica.')->group(function(){
  
  Route::middleware(['guest:secretaria_pedagogica','PreventBackHistory'])->group(function(){
      Route::view('/login','spedagogica.login')->name('login');
  //   Route::view('/register','ondjiva.secretaria.register')->name('register');
      Route::post('/create',[SPedagogicoController::class,'create'])->name('create');
      Route::post('/check',[SPedagogicoController::class,'check'])->name('check');
      
      Route::get('/register',[SPedagogicoController::class,'register'])->name('register');
      Route::post('/registar',[SPedagogicoController::class,'registar'])->name('registar');

  });
  
  Route::middleware(['auth:secretaria_pedagogica','PreventBackHistory'])->group(function(){
     // Route::view('/home','ondjiva.spedagogica.home')->name('home');
      Route::post('/logout',[SPedagogicoController::class,'logout'])->name('logout');
      Route::get('/home',[SPedagogicoController::class,'home'])->name('home');
      Route::get('/professores',[SPedagogicoController::class,'professores'])->name('professores');
      Route::get('/professores_show',[SPedagogicoController::class,'professores_show'])->name('professores_show');
      Route::get('/falta_professores',[SPedagogicoController::class,'falta_professores'])->name('falta_professores');
      Route::post('/falta_professor',[SPedagogicoController::class,'falta_professor'])->name('falta_professor');
      Route::get('/ver_falta',[SPedagogicoController::class,'ver_falta'])->name('ver_falta');
      Route::get('/ver_festudante',[SPedagogicoController::class,'ver_festudante'])->name('ver_festudante');
      Route::get('/declaracoes_professores',[SPedagogicoController::class,'declaracoes_professores'])->name('declaracoes_professores');
      Route::get('/declaracoes_estudantes',[SPedagogicoController::class,'declaracoes_estudantes'])->name('declaracoes_estudantes');
      Route::get('/estudantes',[SPedagogicoController::class,'estudantes'])->name('estudantes');
      Route::get('/funcionario',[SPedagogicoController::class,'funcionario'])->name('funcionario');
    
      //Faltas
      Route::get('/falta',[SPedagogicoController::class,'falta'])->name('falta');
      Route::get('/decima_A/{liceu}/{classe}',[SPedagogicoController::class,'decima_A'])->name('decima_A');

      Route::post('/dec_A/{liceu}/{classe}',[SPedagogicoController::class,'dec_A'])->name('dec_A');



      Route::get('/horario',[SPedagogicoController::class,'horario'])->name('horario');
      Route::post('/enviar_horario',[SPedagogicoController::class,'enviar_horario'])->name('enviar_horario');

     // Route::post('/dec_A',[SPedagogicoController::class,'dec_A'])->name('dec_A');
   
      Route::get('/decima_B',[SPedagogicoController::class,'decima_B'])->name('decima_B');
      Route::post('/dec_B',[SPedagogicoController::class,'dec_B'])->name('dec_B');

      Route::get('/decimap_A',[SPedagogicoController::class,'decimap_A'])->name('decimap_A');
      Route::post('/dep_A',[SPedagogicoController::class,'dep_A'])->name('dep_A');

      Route::get('/decimap_B',[SPedagogicoController::class,'decimap_B'])->name('decimap_B');
      Route::post('/dep_B',[SPedagogicoController::class,'dep_B'])->name('dep_B');

      Route::get('/decimas_A',[SPedagogicoController::class,'decimas_A'])->name('decimas_A');
      Route::post('/des_A',[SPedagogicoController::class,'des_A'])->name('des_A');

      Route::get('/decimas_B',[SPedagogicoController::class,'decimas_B'])->name('decimas_B');
      Route::post('/des_B',[SPedagogicoController::class,'des_B'])->name('des_B');

      Route::get('/notificacao',[SPedagogicoController::class,'notificacao'])->name('notificacao');

      Route::get('/ver_nota',[SPedagogicoController::class,'ver_nota'])->name('ver_nota');
      Route::get('/ver_orientacao_professor/{id}',[SPedagogicoController::class,'ver_orientacao_professor'])->name('ver_orientacao_professor');
      Route::get('/orientacoes_enviadas',[SPedagogicoController::class,'orientacoes_enviadas'])->name('orientacoes_enviadas');

    //  Route::get('/home',[SecretarioController::class,'home'])->name('home');
    Route::get('/turma_a/{liceu}/{classe}',[SPedagogicoController::class,'turma_a'])->name('turma_a');
    Route::get('/ver_turma_as/{id}',[SPedagogicoController::class,'ver_turma_as'])->name('ver_turma_as');
    Route::get('/adicionar_estudante',[SPedagogicoController::class,'adicionar_estudante'])->name('adicionar_estudante');
    Route::post('/adicionar_est',[SPedagogicoController::class,'adicionar_est'])->name('adicionar_est');
    Route::get('/editar_estudante/{id}',[SPedagogicoController::class,'editar_estudante'])->name('editar_estudante');
    Route::put('/editar_est/{id}',[SPedagogicoController::class,'editar_est'])->name('editar_est');

    Route::get('/ver_dado_estudante/{id}',[SPedagogicoController::class, 'ver_dado_estudante'])->name('ver_dado_estudante');;
    Route::get('/ver_dado_professor/{id}',[SPedagogicoController::class, 'ver_dado_professor'])->name('ver_dado_professor');;
      
    Route::get('/ver_boletim_professor/{id}',[SPedagogicoController::class, 'ver_boletim_professor'])->name('ver_boletim_professor');
    Route::get('/ver_info_nota_professor_caxito/{id}',[SPedagogicoController::class, 'ver_info_nota_professor_caxito'])->name('ver_info_nota_professor_caxito');
  
    Route::get('/ver_falta_estudante/{liceu}',[SPedagogicoController::class,'ver_falta_estudante'])->name('ver_falta_estudante');
    Route::get('/ver_info_falta_estudante/{classe}',[SPedagogicoController::class,'ver_info_falta_estudante'])->name('ver_info_falta_estudante');
    Route::get('/ver_info_falta_total_estudante/{liceu}/{classe}/{id}',[SPedagogicoController::class,'ver_info_falta_total_estudante'])->name('ver_info_falta_total_estudante');
   
    Route::get('/form',[SPedagogicoController::class,'form'])->name('form');
    Route::get('/ver_dados',[SPedagogicoController::class,'ver_dados'])->name('ver_dados');
    Route::post('/edit_inf',[SPedagogicoController::class,'edit_inf'])->name('edit_inf');

    Route::get('/alterar_senha',[SPedagogicoController::class,'alterar_senha'])->name('alterar_senha');
    Route::post('/alterar_s',[SPedagogicoController::class,'alterar_s'])->name('alterar_s');

    Route::get('/plano_enviados',[SPedagogicoController::class,'plano_enviados'])->name('plano_enviados');
    Route::get('/ver_plano_professor/{id}',[SPedagogicoController::class,'ver_plano_professor'])->name('ver_plano_professor');

  });

});
