<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\Tecnico\TecnicoController;




Route::prefix('tecnico')->name('tecnico.')->group(function(){
  
  Route::middleware(['guest:tecnico','PreventBackHistory'])->group(function(){
      Route::view('/login','dashboard.tecnico.login')->name('login');
   //  Route::view('/register','dashboard.tecnico.register')->name('register');
      Route::get('/register',[TecnicoController::class,'register'])->name('register');
      Route::post('/create',[TecnicoController::class,'create'])->name('create');
      Route::post('/check',[TecnicoController::class,'check'])->name('check');
  });

  Route::middleware(['auth:tecnico','PreventBackHistory'])->group(function(){
     // Route::view('/home','dashboard.tecnico.home')->name('home');
      
      Route::get('/home',[TecnicoController::class,'home'])->name('home');
      Route::get('/form',[TecnicoController::class,'form'])->name('form');
      Route::post('/edit_inf',[TecnicoController::class,'edit_inf'])->name('edit_inf');

      Route::get('/ver_dados',[TecnicoController::class,'ver_dados'])->name('ver_dados');

      Route::get('/boletim_liceu',[TecnicoController::class,'boletim_liceu'])->name('boletim_liceu');
      Route::get('/tipo_boletim/{id}',[TecnicoController::class,'tipo_boletim'])->name('tipo_boletim');
      Route::get('/ver_nota_enviada/{liceu}',[TecnicoController::class,'ver_nota_enviada'])->name('ver_nota_enviada');
      Route::get('/ver_nota_enviada_individual/{liceu}/{id}',[TecnicoController::class,'ver_nota_enviada_individual'])->name('ver_nota_enviada_individual');
      Route::get('/ver_info_nota_enviada_individual/{liceu}/{id}/{created_at}',[TecnicoController::class,'ver_info_nota_enviada_individual'])->name('ver_info_nota_enviada_individual');

      Route::get('/ver_nota_validada/{liceu}',[TecnicoController::class,'ver_nota_validada'])->name('ver_nota_validada');
      Route::get('/ver_nota_validada_individual/{liceu}/{id}',[TecnicoController::class,'ver_nota_validada_individual'])->name('ver_nota_validada_individual');
      Route::get('/ver_info_nota_validada_individual/{liceu}/{id}/{created_at}',[TecnicoController::class,'ver_info_nota_validada_individual'])->name('ver_info_nota_validada_individual');

      Route::get('/plano_liceu',[TecnicoController::class,'plano_liceu'])->name('plano_liceu');
      Route::get('/plano_enviados/{id}',[TecnicoController::class,'plano_enviados'])->name('plano_enviados');
      Route::get('/plano_individual/{liceu}/{id}',[TecnicoController::class,'plano_individual'])->name('plano_individual');

      Route::get('/orientacao_liceu',[TecnicoController::class,'orientacao_liceu'])->name('orientacao_liceu');
      Route::get('/orientacao_enviados/{id}',[TecnicoController::class,'orientacao_enviados'])->name('orientacao_enviados');
      Route::get('/orientacao_individual/{liceu}/{id}',[TecnicoController::class,'orientacao_individual'])->name('orientacao_individual');


      Route::get('/enviar_formacao',[TecnicoController::class,'enviar_formacao'])->name('enviar_formacao');
      Route::get('/formacao_disciplina/{id}',[TecnicoController::class,'formacao_disciplina'])->name('formacao_disciplina');
      Route::post('/formacao_disciplinas',[TecnicoController::class,'formacao_disciplinas'])->name('formacao_disciplinas');
      Route::get('/formacao_liceu/{id}',[TecnicoController::class,'formacao_liceu'])->name('formacao_liceu');
      Route::post('/formacao/{id}',[TecnicoController::class,'formacao'])->name('formacao');
      Route::get('/editar_formacao/{id}',[TecnicoController::class,'editar_formacao'])->name('editar_formacao');
      Route::put('/editar_form',[TecnicoController::class,'editar_form'])->name('editar_form');
      Route::delete('/eliminar_form/{id}',[TecnicoController::class,'eliminar_form'])->name('eliminar_form');
      Route::get('/ver_formacao',[TecnicoController::class,'ver_formacao'])->name('ver_formacao');

      Route::get('/directores_liceu',[TecnicoController::class,'directores_liceu'])->name('directores_liceu');
      Route::get('/directores/{id}',[TecnicoController::class,'directores'])->name('directores');
      Route::get('/info_directore/{liceu}/{id}',[TecnicoController::class,'info_directore'])->name('info_directore');
      Route::get('/info_directore_P/{liceu}/{id}',[TecnicoController::class,'info_directore_P'])->name('info_directore_P');
      Route::get('/info_directore_A/{liceu}/{id}',[TecnicoController::class,'info_directore_A'])->name('info_directore_A');
      
      Route::get('/professor_liceu',[TecnicoController::class,'professor_liceu'])->name('professor_liceu');
      Route::get('/professores/{id}',[TecnicoController::class,'professores'])->name('professores');
      Route::get('/info_professores/{id}',[TecnicoController::class,'info_professores'])->name('info_professores');

      Route::get('/estudante_liceu',[TecnicoController::class,'estudante_liceu'])->name('estudante_liceu');
      Route::get('/falta_estudante_liceu',[TecnicoController::class,'falta_estudante_liceu'])->name('falta_estudante_liceu');
      Route::get('/falta_professor_liceu',[TecnicoController::class,'falta_professor_liceu'])->name('falta_professor_liceu');
      Route::get('/notificacao_liceu',[TecnicoController::class,'notificacao_liceu'])->name('notificacao_liceu');
      Route::get('/pedagogia_liceu',[TecnicoController::class,'pedagogia_liceu'])->name('pedagogia_liceu');
      Route::get('/recurso_liceu',[TecnicoController::class,'recurso_liceu'])->name('recurso_liceu');
      Route::get('/solicitacao_liceu',[TecnicoController::class,'solicitacao_liceu'])->name('solicitacao_liceu');
      Route::get('/secretarios_liceu',[TecnicoController::class,'secretarios_liceu'])->name('secretarios_liceu');
      Route::get('/funcionarios_liceu',[TecnicoController::class,'funcionarios_liceu'])->name('funcionarios_liceu');


      Route::get('/alterar_senha',[TecnicoController::class,'alterar_senha'])->name('alterar_senha');
      Route::post('/alterar_s',[TecnicoController::class,'alterar_s'])->name('alterar_s');
       // Directores
       Route::get('/diretoresO',[TecnicoController::class,'diretoresO'])->name('diretoresO');
       Route::get('/ver_director/{liceu}',[TecnicoController::class,'ver_director'])->name('ver_director');
       Route::get('/ver_info_director/{liceu}/{id}',[TecnicoController::class,'ver_info_director'])->name('ver_info_director');
       Route::get('/ver_info_directorp/{liceu}/{id}',[TecnicoController::class,'ver_info_directorp'])->name('ver_info_directorp');
       Route::get('/ver_info_directora/{liceu}/{id}',[TecnicoController::class,'ver_info_directora'])->name('ver_info_directora');
       Route::get('/ver_falta',[TecnicoController::class,'ver_falta'])->name('ver_falta');
       Route::get('/tipo_pedagogia',[TecnicoController::class,'tipo_pedagogia'])->name('tipo_pedagogia');
       Route::get('/tipo_recurso',[TecnicoController::class,'tipo_recurso'])->name('tipo_recurso');


      //Secretarios
      Route::get('/secretarios',[TecnicoController::class,'secretarios'])->name('secretarios');
      Route::get('/ver_secretario/{liceu}',[TecnicoController::class,'ver_secretario'])->name('ver_secretario');
      Route::get('/ver_info_secretariop/{liceu}/{id}',[TecnicoController::class,'ver_info_secretariop'])->name('ver_info_secretariop');
      Route::get('/ver_info_secretarioa/{liceu}/{id}',[TecnicoController::class,'ver_info_secretarioa'])->name('ver_info_secretarioa');

      Route::get('/lprofessores',[TecnicoController::class,'lprofessores'])->name('lprofessores');
      Route::get('/prof/{liceu}',[TecnicoController::class,'prof'])->name('prof');
      Route::get('/ver_dados_professor/{id}',[TecnicoController::class, 'ver_dados_professor'])->name('ver_dados_professor');
   
      Route::get('/falta_professores',[TecnicoController::class,'falta_professores'])->name('falta_professores');

      Route::get('/ver_falta_professor/{id}',[TecnicoController::class,'ver_falta_professor'])->name('ver_falta_professor');
      Route::get('/ver_info_falta_professor/{liceu}/{id}',[TecnicoController::class,'ver_info_falta_professor'])->name('ver_info_falta_professor');

      Route::get('/ldeclaracao',[TecnicoController::class,'ldeclaracao'])->name('ldeclaracao');
      Route::get('/declaracao_professores/{id}',[TecnicoController::class,'declaracao_professores'])->name('declaracao_professores');
      Route::get('/ver_declaracao_professor/{liceu}/{id}',[TecnicoController::class,'ver_declaracao_professor'])->name('ver_declaracao_professor');

      Route::get('/lnotas',[TecnicoController::class,'lnotas'])->name('lnotas');
      Route::get('/ver_notas/{liceu}',[TecnicoController::class,'ver_notas'])->name('ver_notas');
      Route::get('/ver_boletim_professor/{id}',[TecnicoController::class, 'ver_boletim_professor'])->name('ver_boletim_professor');
      Route::get('/ver_info_nota_professor/{liceu}/{id}',[TecnicoController::class, 'ver_info_nota_professor'])->name('ver_info_nota_professor');
     
      Route::get('/lplanos',[TecnicoController::class,'lplanos'])->name('lplanos');
      Route::get('/planos/{liceu}',[TecnicoController::class,'planos'])->name('planos');
      Route::get('/ver_plano_professor/{liceu}/{id}',[TecnicoController::class, 'ver_plano_professor'])->name('ver_plano_professor');
     
      Route::get('/lorientacoes',[TecnicoController::class,'lorientacoes'])->name('lorientacoes');
      Route::get('/orientacoes_enviadas/{liceu}',[TecnicoController::class,'orientacoes_enviadas'])->name('orientacoes_enviadas');
      Route::get('/ver_orientacao_professor/{liceu}/{id}',[TecnicoController::class, 'ver_orientacao_professor'])->name('ver_orientacao_professor');
     
      Route::get('/lestudantes',[TecnicoController::class,'lestudantes'])->name('lestudantes');

      Route::get('/turma_as/{liceu}',[TecnicoController::class,'turma_as'])->name('turma_as');
      Route::get('/ver_turma_as/{liceu}/{classe}',[TecnicoController::class,'ver_turma_as'])->name('ver_turma_as');
      Route::get('/ver_info_as/{liceu}/{classe}/{id}',[TecnicoController::class,'ver_info_as'])->name('ver_info_as');
      Route::get('/ver_individual/{id}',[TecnicoController::class,'ver_individual'])->name('ver_individual');
  

      Route::get('/ver_festudante',[TecnicoController::class,'ver_festudante'])->name('ver_festudante');
      
      Route::get('/ver_falta_estudante/{liceu}',[TecnicoController::class,'ver_falta_estudante'])->name('ver_falta_estudante');
      Route::get('/ver_info_falta_estudante/{liceu}/{classe}',[TecnicoController::class,'ver_info_falta_estudante'])->name('ver_info_falta_estudante');
      Route::get('/ver_info_falta_total_estudante/{liceu}/{classe}/{id}',[TecnicoController::class,'ver_info_falta_total_estudante'])->name('ver_info_falta_total_estudante');
  

      Route::get('/declaracoes_estudantes',[TecnicoController::class,'declaracoes_estudantes'])->name('declaracoes_estudantes');
      
      Route::get('/ver_declaracao_estudante/{liceu}',[TecnicoController::class,'ver_declaracao_estudante'])->name('ver_declaracao_estudante');
      Route::get('/ver_info_declaracao_estudante/{liceu}',[TecnicoController::class,'ver_info_declaracao_estudante'])->name('ver_info_declaracao_estudante');
  

      Route::get('/funcionario',[TecnicoController::class,'funcionario'])->name('funcionario');
      
      Route::get('/ver_dado_funcionario/{liceu}',[TecnicoController::class,'ver_dado_funcionario'])->name('ver_dado_funcionario');
      Route::get('/ver_info_funcionario/{liceu}',[TecnicoController::class,'ver_info_funcionario'])->name('ver_info_funcionario');
  
      Route::get('/ver_faltaf',[TecnicoController::class,'ver_faltaf'])->name('ver_faltaf');
      Route::get('/lnotificacao',[TecnicoController::class,'lnotificacao'])->name('lnotificacao');


      Route::get('/enviar_individual/{liceu}',[TecnicoController::class,'enviar_individual'])->name('enviar_individual');
      Route::get('/enviar_liceu/{liceu}',[TecnicoController::class,'enviar_liceu'])->name('enviar_liceu');
      Route::get('/not_estudantes/{liceu}',[TecnicoController::class,'not_estudantes'])->name('not_estudantes');
  
      Route::get('/decima_A/{liceu}/{classe}',[TecnicoController::class,'decima_A'])->name('decima_A');
      Route::post('/dec_A/{liceu}/{classe}',[TecnicoController::class,'dec_A'])->name('dec_A');
      Route::get('/enviar_n/{liceu}/{classe}',[TecnicoController::class,'enviar_n'])->name('enviar_n');


      Route::post('/logout',[TecnicoController::class,'logout'])->name('logout');    });

});



     
