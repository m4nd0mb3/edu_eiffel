<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\Professor\ProfessorController;





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

Route::prefix('professor')->name('professor.')->group(function(){
  
    Route::middleware(['guest:professor','PreventBackHistory'])->group(function(){
        Route::view('/login','professor.login')->name('login');
        Route::get('/register',[ProfessorController::class,'register'])->name('register');
        Route::post('/create',[ProfessorController::class,'create'])->name('create');
        Route::post('/check',[ProfessorController::class,'check'])->name('check');
    });

    Route::middleware(['auth:professor','PreventBackHistory'])->group(function(){
      //  Route::view('/home','ondjiva.professor.home')->name('home');
       // Route::view('/turmas','ondjiva.professor.turmas')->name('turmas');
        Route::get('/home',[ProfessorController::class,'home'])->name('home');
        Route::get('/orientacoes',[ProfessorController::class,'orientacoes'])->name('orientacoes');
        Route::post('/orientacao',[ProfessorController::class,'orientacao'])->name('orientacao');
        Route::get('/orientacoes_enviadas',[ProfessorController::class,'orientacoes_enviadas'])->name('orientacoes_enviadas');
       
        Route::get('/planos',[ProfessorController::class,'planos'])->name('planos');
        Route::post('/plano',[ProfessorController::class,'plano'])->name('plano');
        Route::get('/plano_enviados',[ProfessorController::class,'plano_enviados'])->name('plano_enviados');
        Route::delete('/deletar_plano/{id}',[ProfessorController::class,'deletar_plano'])->name('deletar_plano');
        Route::delete('/deletar_orientacao/{id}',[ProfessorController::class,'deletar_orientacao'])->name('deletar_orientacao');

        Route::get('/solicitar',[ProfessorController::class,'solicitar'])->name('solicitar');
        Route::post('/sol',[ProfessorController::class,'sol'])->name('sol');
        Route::get('/solicitacao_enviadas',[ProfessorController::class,'solicitacao_enviadas'])->name('solicitacao_enviadas');
        Route::get('/ver_formacao',[ProfessorController::class,'ver_formacao'])->name('ver_formacao');
        Route::get('/notificacao',[ProfessorController::class,'notificacao'])->name('notificacao');
        Route::get('/ver_falta',[ProfessorController::class,'ver_falta'])->name('ver_falta');
        Route::get('/download{$imageName}',[ProfessorController::class,'download'])->name('download');
        Route::get('/ver_nota',[ProfessorController::class,'ver_nota'])->name('ver_nota');


        Route::get('/enviar_mensagem',[ProfessorController::class,'enviar_mensagem'])->name('enviar_mensagem');
        Route::post('/fazer_chegar_mensagem_no_professor',[ProfessorController::class,'fazer_chegar_mensagem_no_professor'])->name('fazer_chegar_mensagem_no_professor');
  
      //  Route::view('/turmas','ondjiva.professor.turmas')->name('turmas');
     Route::get('/turmas',[ProfessorController::class,'turmas'])->name('turmas');
     Route::get('/classe/{liceu}/{classe}',[ProfessorController::class,'classe'])->name('classe');
     
     Route::get('/create_boletim/{liceu}',[ProfessorController::class,'create_boletim'])->name('create_boletim');
     Route::get('/imprimir_boletim_t',[ProfessorController::class,'imprimir_boletim_t'])->name('imprimir_boletim_t');
     Route::get('/imprimir_cardeneta/{liceu}/{mix_id}/{classe}/{data}/{trimestre_id}',[ProfessorController::class,'imprimir_cardeneta'])->name('imprimir_cardeneta');
     Route::post('/get_students_by_class',[ProfessorController::class,'get_students_by_class'])->name('get_students_by_class');
     
     Route::post('/enviar_nota/{liceu}/{classe}',[ProfessorController::class,'enviar_nota'])->name('enviar_nota');
     
     Route::get('/listar_cardenetas/{liceu}',[ProfessorController::class,'listar_cardenetas'])->name('listar_cardenetas');
     Route::get('/ver_info_nota_professor/{id}',[ProfessorController::class,'ver_info_nota_professor'])->name('ver_info_nota_professor');
    
     Route::get('/editar_provas/{id}',[ProfessorController::class,'editar_provas'])->name('editar_provas');
     Route::get('/editar_plano/{id}',[ProfessorController::class,'editar_plano'])->name('editar_plano');
     Route::put('/editar_pl/{id}',[ProfessorController::class,'editar_pl'])->name('editar_pl');
     Route::put('/editar_p/{liceu}/{classe}/{created_at}',[ProfessorController::class,'editar_p'])->name('editar_p');
     Route::delete('/eliminar_p/{mix_id}/{created_at}',[ProfessorController::class,'eliminar_p'])->name('eliminar_p');


     Route::get('/ver_nota_validada',[ProfessorController::class,'ver_nota_validada'])->name('ver_nota_validada');
     Route::get('/ver_info_nota_professor_validada/{professor_id}/{created_at}',[ProfessorController::class, 'ver_info_nota_professor_validada'])->name('ver_info_nota_professor_validada');

     
     Route::get('/estudantes',[ProfessorController::class,'estudantes'])->name('estudantes');
     Route::get('/turma_a/{liceu}/{classe}',[ProfessorController::class,'turma_a'])->name('turma_a');
     Route::get('/ver_turma_as/{id}',[ProfessorController::class,'ver_turma_as'])->name('ver_turma_as');
 
     
     Route::get('/relatar',[ProfessorController::class,'relatar'])->name('relatar');
     Route::get('/ver_relatos',[ProfessorController::class,'ver_relatos'])->name('ver_relatos');
     Route::post('/enviar_relato',[ProfessorController::class,'enviar_relato'])->name('enviar_relato');
     Route::get('/imprimir',[ProfessorController::class,'imprimir'])->name('imprimir');

     Route::get('/tipo_boletim',[ProfessorController::class,'tipo_boletim'])->name('tipo_boletim');

     Route::get('/alterar_senha',[ProfessorController::class,'alterar_senha'])->name('alterar_senha');
     Route::post('/alterar_s',[ProfessorController::class,'alterar_s'])->name('alterar_s');
   
     Route::post('/criar_tarefa',[ProfessorController::class,'criar_tarefa'])->name('criar_tarefa');

        Route::get('/form/{id}',[ProfessorController::class,'form'])->name('form');
        Route::get('/ver_dados',[ProfessorController::class,'ver_dados'])->name('ver_dados');
        Route::post('/edit_inf',[ProfessorController::class,'edit_inf'])->name('edit_inf');
        Route::get('/ver_dado_estudante/{id}',[ProfessorController::class, 'ver_dado_estudante'])->name('ver_dado_estudante');;

        Route::get('/ver_boletim_professor_ondjiva/{id}',[ProfessorController::class, 'ver_boletim_professor_ondjiva'])->name('ver_boletim_professor_ondjiva');
        Route::get('/ver_info_nota_professor_ondjiva/{id}',[ProfessorController::class, 'ver_info_nota_professor_ondjiva'])->name('ver_info_nota_professor_ondjiva');
        Route::get('/imprimir_turmas',[ProfessorController::class, 'imprimir_turmas'])->name('imprimir_turmas');
        Route::get('/imprimir_boletim/{id}',[ProfessorController::class, 'imprimir_boletim'])->name('imprimir_boletim');
        //Route::get('/ver_notificacao',[ProfessorController::class, 'ver_notificacao'])->name('ver_notificacao');
  
        
        Route::post('/logout',[ProfessorController::class,'logout'])->name('logout');
      

    });

});
