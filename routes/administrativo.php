<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\Administrativo\AdministrativoController;





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


Route::prefix('administracao')->name('administracao.')->group(function(){
  
  Route::middleware(['guest:administracao','PreventBackHistory'])->group(function(){
      Route::view('/login','administracao.login')->name('login');
//     Route::view('/register','ondjiva.administracao.register')->name('register');
      Route::get('/register',[AdministrativoController::class,'register'])->name('register');
      Route::post('/create',[AdministrativoController::class,'create'])->name('create');
      Route::post('/check',[AdministrativoController::class,'check'])->name('check');
  });

  Route::middleware(['auth:administracao','PreventBackHistory'])->group(function(){
      Route::view('/home','administracao.home')->name('home');
      Route::get('/professores',[AdministrativoController::class,'professores'])->name('professores');
      Route::get('/ver_falta',[AdministrativoController::class,'ver_falta'])->name('ver_falta');
      Route::get('/declaracoes_professores',[AdministrativoController::class,'declaracoes_professores'])->name('declaracoes_professores');
      Route::get('/estudantes',[AdministrativoController::class,'estudantes'])->name('estudantes');
      Route::get('/turma_a',[AdministrativoController::class,'turma_a'])->name('turma_a');
      Route::get('/turma_b',[AdministrativoController::class,'turma_b'])->name('turma_b');
      Route::get('/turma_pa',[AdministrativoController::class,'turma_pa'])->name('turma_pa');
      Route::get('/turma_pb',[AdministrativoController::class,'turma_pb'])->name('turma_pb');
      Route::get('/turma_sa',[AdministrativoController::class,'turma_sa'])->name('turma_sa');
      Route::get('/turma_sb',[AdministrativoController::class,'turma_sb'])->name('turma_sb');
      Route::get('/ver_festudante',[AdministrativoController::class,'ver_festudante'])->name('ver_festudante');
      Route::get('/enviar_notificacao',[AdministrativoController::class,'enviar_notificacao'])->name('enviar_notificacao');
      Route::post('/notificacao',[AdministrativoController::class,'notificacao'])->name('notificacao');
      Route::get('/enviar_nestudante',[AdministrativoController::class,'enviar_nestudante'])->name('enviar_nestudante');
      Route::get('/decima_A',[AdministrativoController::class,'decima_A'])->name('decima_A');
      Route::post('/dec_A',[AdministrativoController::class,'dec_A'])->name('dec_A');
   
      Route::get('/decima_B',[AdministrativoController::class,'decima_B'])->name('decima_B');
      Route::post('/dec_B',[AdministrativoController::class,'dec_B'])->name('dec_B');

      Route::get('/decimap_A',[AdministrativoController::class,'decimap_A'])->name('decimap_A');
      Route::post('/dep_A',[AdministrativoController::class,'dep_A'])->name('dep_A');

      Route::get('/decimap_B',[AdministrativoController::class,'decimap_B'])->name('decimap_B');
      Route::post('/dep_B',[AdministrativoController::class,'dep_B'])->name('dep_B');

      Route::get('/decimas_A',[AdministrativoController::class,'decimas_A'])->name('decimas_A');
      Route::post('/des_A',[AdministrativoController::class,'des_A'])->name('des_A');

      Route::get('/decimas_B',[AdministrativoController::class,'decimas_B'])->name('decimas_B');
      Route::post('/des_B',[AdministrativoController::class,'des_B'])->name('des_B');


      Route::get('/declaracoes_estudantes',[AdministrativoController::class,'declaracoes_estudantes'])->name('declaracoes_estudantes');

      Route::get('/notificacao_secretario',[AdministrativoController::class,'notificacao_secretario'])->name('notificacao_secretario');
      Route::post('/noti_secretario',[AdministrativoController::class,'noti_secretario'])->name('noti_secretario');
      
      Route::get('/ver_totalnotificacoes',[AdministrativoController::class,'ver_totalnotificacoes'])->name('ver_totalnotificacoes');
      Route::get('/ver_relatorio',[AdministrativoController::class,'ver_relatorio'])->name('ver_relatorio');

    //  Route::get('/avaliacao',[AdministrativoController::class,'avaliacao'])->name('avaliacao');
      //Route::post('/enviar_avaliacao',[AdministrativoController::class,'enviar_avaliacao'])->name('enviar_avaliacao');

    //  Route::get('/avaliacaop',[AdministrativoController::class,'avaliacaop'])->name('avaliacaop');
      //Route::post('/enviar_avaliacaop',[AdministrativoController::class,'enviar_avaliacaop'])->name('enviar_avaliacaop');

      Route::get('/relatorio',[AdministrativoController::class,'relatorio'])->name('relatorio');
      Route::get('/notificacao_psecretario',[AdministrativoController::class,'notificacao_psecretario'])->name('notificacao_psecretario');
      Route::post('/noti_psecretario',[AdministrativoController::class,'noti_psecretario'])->name('noti_psecretario');
      Route::post('/enviar_relatorio',[AdministrativoController::class,'enviar_relatorio'])->name('enviar_relatorio');
    

      Route::get('/notificacaos',[AdministrativoController::class,'notificacaos'])->name('notificacaos');


      Route::post('/logout',[AdministrativoController::class,'logout'])->name('logout');
      Route::get('/ver_dado_estudante/{id}',[AdministrativoController::class, 'ver_dado_estudante'])->name('ver_dado_estudante');;
      Route::get('/ver_dado_professor/{id}',[AdministrativoController::class, 'ver_dado_professor'])->name('ver_dado_professor');;
     
      Route::get('/funcionario',[AdministrativoController::class,'funcionario'])->name('funcionario');
      Route::get('/f_funcionario',[AdministrativoController::class,'f_funcionario'])->name('f_funcionario');
      Route::get('/ver_faltaf',[AdministrativoController::class,'ver_faltaf'])->name('ver_faltaf');
      Route::post('/falta_funcionario',[AdministrativoController::class,'falta_funcionario'])->name('falta_funcionario');


      
      Route::get('/avalicao_funcionario',[AdministrativoController::class,'avalicao_funcionario'])->name('avalicao_funcionario');
      Route::get('/ver_avaliacao',[AdministrativoController::class,'ver_avaliacao'])->name('ver_avaliacao');
      Route::post('/avaliacao',[AdministrativoController::class,'avaliacao'])->name('avaliacao');


  });

});









