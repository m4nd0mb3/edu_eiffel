<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\Coordenacao\CordenacaoController;




Route::prefix('coordenacao')->name('coordenacao.')->group(function(){
  
  Route::middleware(['guest:coordenacao','PreventBackHistory'])->group(function(){
      Route::view('/login','dashboard.coordenador.login')->name('login');
     Route::view('/register','dashboard.coordenador.register')->name('register');
    //  Route::get('/register',[CordenacaoController::class,'register'])->name('register');
      Route::post('/create',[CordenacaoController::class,'create'])->name('create');
      Route::post('/check',[CordenacaoController::class,'check'])->name('check');
  });

  Route::middleware(['auth:coordenacao','PreventBackHistory'])->group(function(){
     // Route::view('/home','dashboard.coordenador.home')->name('home');
      
      Route::get('/home',[CordenacaoController::class,'home'])->name('home');
      Route::get('/form',[CordenacaoController::class,'form'])->name('form');
      Route::post('/edit_inf',[CordenacaoController::class,'edit_inf'])->name('edit_inf');

      Route::get('/ver_dados',[CordenacaoController::class,'ver_dados'])->name('ver_dados');

      Route::get('/boletim_liceu',[CordenacaoController::class,'boletim_liceu'])->name('boletim_liceu');
      Route::get('/tipo_boletim/{id}',[CordenacaoController::class,'tipo_boletim'])->name('tipo_boletim');
      Route::get('/ver_nota_enviada/{liceu}',[CordenacaoController::class,'ver_nota_enviada'])->name('ver_nota_enviada');
      Route::get('/ver_nota_enviada_individual/{liceu}/{id}',[CordenacaoController::class,'ver_nota_enviada_individual'])->name('ver_nota_enviada_individual');
      Route::get('/ver_info_nota_enviada_individual/{liceu}/{id}/{created_at}',[CordenacaoController::class,'ver_info_nota_enviada_individual'])->name('ver_info_nota_enviada_individual');

      Route::get('/ver_nota_validada/{liceu}',[CordenacaoController::class,'ver_nota_validada'])->name('ver_nota_validada');
      Route::get('/ver_nota_validada_individual/{liceu}/{id}',[CordenacaoController::class,'ver_nota_validada_individual'])->name('ver_nota_validada_individual');
      Route::get('/ver_info_nota_validada_individual/{liceu}/{id}/{created_at}',[CordenacaoController::class,'ver_info_nota_validada_individual'])->name('ver_info_nota_validada_individual');

      Route::get('/plano_liceu',[CordenacaoController::class,'plano_liceu'])->name('plano_liceu');
      Route::get('/plano_enviados/{id}',[CordenacaoController::class,'plano_enviados'])->name('plano_enviados');
      Route::get('/plano_individual/{liceu}/{id}',[CordenacaoController::class,'plano_individual'])->name('plano_individual');

      Route::get('/orientacao_liceu',[CordenacaoController::class,'orientacao_liceu'])->name('orientacao_liceu');
      Route::get('/orientacao_enviados/{id}',[CordenacaoController::class,'orientacao_enviados'])->name('orientacao_enviados');
      Route::get('/orientacao_individual/{liceu}/{id}',[CordenacaoController::class,'orientacao_individual'])->name('orientacao_individual');


      Route::get('/enviar_formacao',[CordenacaoController::class,'enviar_formacao'])->name('enviar_formacao');
      Route::get('/formacao_disciplina/{id}',[CordenacaoController::class,'formacao_disciplina'])->name('formacao_disciplina');
      Route::post('/formacao_disciplinas',[CordenacaoController::class,'formacao_disciplinas'])->name('formacao_disciplinas');
      Route::get('/formacao_liceu/{id}',[CordenacaoController::class,'formacao_liceu'])->name('formacao_liceu');
      Route::post('/formacao/{id}',[CordenacaoController::class,'formacao'])->name('formacao');
      Route::get('/editar_formacao/{id}',[CordenacaoController::class,'editar_formacao'])->name('editar_formacao');
      Route::put('/editar_form',[CordenacaoController::class,'editar_form'])->name('editar_form');
      Route::delete('/eliminar_form/{id}',[CordenacaoController::class,'eliminar_form'])->name('eliminar_form');
      Route::get('/ver_formacao',[CordenacaoController::class,'ver_formacao'])->name('ver_formacao');

      Route::get('/directores_liceu',[CordenacaoController::class,'directores_liceu'])->name('directores_liceu');
      Route::get('/directores/{id}',[CordenacaoController::class,'directores'])->name('directores');
      Route::get('/info_directore/{liceu}/{id}',[CordenacaoController::class,'info_directore'])->name('info_directore');
      Route::get('/info_directore_P/{liceu}/{id}',[CordenacaoController::class,'info_directore_P'])->name('info_directore_P');
      Route::get('/info_directore_A/{liceu}/{id}',[CordenacaoController::class,'info_directore_A'])->name('info_directore_A');
      
      Route::get('/professor_liceu',[CordenacaoController::class,'professor_liceu'])->name('professor_liceu');
      Route::get('/professores/{id}',[CordenacaoController::class,'professores'])->name('professores');
      Route::get('/info_professores/{id}',[CordenacaoController::class,'info_professores'])->name('info_professores');

      Route::get('/estudante_liceu',[CordenacaoController::class,'estudante_liceu'])->name('estudante_liceu');
      Route::get('/falta_estudante_liceu',[CordenacaoController::class,'falta_estudante_liceu'])->name('falta_estudante_liceu');
      Route::get('/falta_professor_liceu',[CordenacaoController::class,'falta_professor_liceu'])->name('falta_professor_liceu');
      Route::get('/notificacao_liceu',[CordenacaoController::class,'notificacao_liceu'])->name('notificacao_liceu');
      Route::get('/pedagogia_liceu',[CordenacaoController::class,'pedagogia_liceu'])->name('pedagogia_liceu');
      Route::get('/recurso_liceu',[CordenacaoController::class,'recurso_liceu'])->name('recurso_liceu');
      Route::get('/solicitacao_liceu',[CordenacaoController::class,'solicitacao_liceu'])->name('solicitacao_liceu');
      Route::get('/secretarios_liceu',[CordenacaoController::class,'secretarios_liceu'])->name('secretarios_liceu');
      Route::get('/funcionarios_liceu',[CordenacaoController::class,'funcionarios_liceu'])->name('funcionarios_liceu');


      Route::get('/alterar_senha',[CordenacaoController::class,'alterar_senha'])->name('alterar_senha');
      Route::post('/alterar_s',[CordenacaoController::class,'alterar_s'])->name('alterar_s');
       // Directores
       Route::get('/diretoresO',[CordenacaoController::class,'diretoresO'])->name('diretoresO');
       Route::get('/ver_director/{liceu}',[CordenacaoController::class,'ver_director'])->name('ver_director');
       Route::get('/ver_info_director/{liceu}/{id}',[CordenacaoController::class,'ver_info_director'])->name('ver_info_director');
       Route::get('/ver_info_directorp/{liceu}/{id}',[CordenacaoController::class,'ver_info_directorp'])->name('ver_info_directorp');
       Route::get('/ver_info_directora/{liceu}/{id}',[CordenacaoController::class,'ver_info_directora'])->name('ver_info_directora');
       Route::get('/ver_falta',[CordenacaoController::class,'ver_falta'])->name('ver_falta');
       Route::get('/tipo_pedagogia',[CordenacaoController::class,'tipo_pedagogia'])->name('tipo_pedagogia');
       Route::get('/tipo_recurso',[CordenacaoController::class,'tipo_recurso'])->name('tipo_recurso');


      //Secretarios
      Route::get('/secretarios',[CordenacaoController::class,'secretarios'])->name('secretarios');
      Route::get('/ver_secretario/{liceu}',[CordenacaoController::class,'ver_secretario'])->name('ver_secretario');
      Route::get('/ver_info_secretariop/{liceu}/{id}',[CordenacaoController::class,'ver_info_secretariop'])->name('ver_info_secretariop');
      Route::get('/ver_info_secretarioa/{liceu}/{id}',[CordenacaoController::class,'ver_info_secretarioa'])->name('ver_info_secretarioa');

      Route::get('/lprofessores',[CordenacaoController::class,'lprofessores'])->name('lprofessores');
      Route::get('/prof/{liceu}',[CordenacaoController::class,'prof'])->name('prof');
      Route::get('/ver_dados_professor/{id}',[CordenacaoController::class, 'ver_dados_professor'])->name('ver_dados_professor');
   
      Route::get('/falta_professores',[CordenacaoController::class,'falta_professores'])->name('falta_professores');

      Route::get('/ver_falta_professor/{id}',[CordenacaoController::class,'ver_falta_professor'])->name('ver_falta_professor');
      Route::get('/ver_info_falta_professor/{liceu}/{id}',[CordenacaoController::class,'ver_info_falta_professor'])->name('ver_info_falta_professor');

      Route::get('/ldeclaracao',[CordenacaoController::class,'ldeclaracao'])->name('ldeclaracao');
      Route::get('/declaracao_professores/{id}',[CordenacaoController::class,'declaracao_professores'])->name('declaracao_professores');
      Route::get('/ver_declaracao_professor/{liceu}/{id}',[CordenacaoController::class,'ver_declaracao_professor'])->name('ver_declaracao_professor');

      Route::get('/lnotas',[CordenacaoController::class,'lnotas'])->name('lnotas');
      Route::get('/ver_notas/{liceu}',[CordenacaoController::class,'ver_notas'])->name('ver_notas');
      Route::get('/ver_boletim_professor/{id}',[CordenacaoController::class, 'ver_boletim_professor'])->name('ver_boletim_professor');
      Route::get('/ver_info_nota_professor/{liceu}/{id}',[CordenacaoController::class, 'ver_info_nota_professor'])->name('ver_info_nota_professor');
     
      Route::get('/lplanos',[CordenacaoController::class,'lplanos'])->name('lplanos');
      Route::get('/planos/{liceu}',[CordenacaoController::class,'planos'])->name('planos');
      Route::get('/ver_plano_professor/{liceu}/{id}',[CordenacaoController::class, 'ver_plano_professor'])->name('ver_plano_professor');
     
      Route::get('/lorientacoes',[CordenacaoController::class,'lorientacoes'])->name('lorientacoes');
      Route::get('/orientacoes_enviadas/{liceu}',[CordenacaoController::class,'orientacoes_enviadas'])->name('orientacoes_enviadas');
      Route::get('/ver_orientacao_professor/{liceu}/{id}',[CordenacaoController::class, 'ver_orientacao_professor'])->name('ver_orientacao_professor');
     
      Route::get('/lestudantes',[CordenacaoController::class,'lestudantes'])->name('lestudantes');

      Route::get('/turma_as/{liceu}',[CordenacaoController::class,'turma_as'])->name('turma_as');
      Route::get('/ver_turma_as/{liceu}/{classe}',[CordenacaoController::class,'ver_turma_as'])->name('ver_turma_as');
      Route::get('/ver_info_as/{liceu}/{classe}/{id}',[CordenacaoController::class,'ver_info_as'])->name('ver_info_as');
      Route::get('/ver_individual/{id}',[CordenacaoController::class,'ver_individual'])->name('ver_individual');
  

      Route::get('/ver_festudante',[CordenacaoController::class,'ver_festudante'])->name('ver_festudante');
      
      Route::get('/ver_falta_estudante/{liceu}',[CordenacaoController::class,'ver_falta_estudante'])->name('ver_falta_estudante');
      Route::get('/ver_info_falta_estudante/{liceu}/{classe}',[CordenacaoController::class,'ver_info_falta_estudante'])->name('ver_info_falta_estudante');
      Route::get('/ver_info_falta_total_estudante/{liceu}/{classe}/{id}',[CordenacaoController::class,'ver_info_falta_total_estudante'])->name('ver_info_falta_total_estudante');
  

      Route::get('/declaracoes_estudantes',[CordenacaoController::class,'declaracoes_estudantes'])->name('declaracoes_estudantes');
      
      Route::get('/ver_declaracao_estudante/{liceu}',[CordenacaoController::class,'ver_declaracao_estudante'])->name('ver_declaracao_estudante');
      Route::get('/ver_info_declaracao_estudante/{liceu}',[CordenacaoController::class,'ver_info_declaracao_estudante'])->name('ver_info_declaracao_estudante');
  

      Route::get('/funcionario',[CordenacaoController::class,'funcionario'])->name('funcionario');
      
      Route::get('/ver_dado_funcionario/{liceu}',[CordenacaoController::class,'ver_dado_funcionario'])->name('ver_dado_funcionario');
      Route::get('/ver_info_funcionario/{liceu}',[CordenacaoController::class,'ver_info_funcionario'])->name('ver_info_funcionario');
  
      Route::get('/ver_faltaf',[CordenacaoController::class,'ver_faltaf'])->name('ver_faltaf');
      Route::get('/lnotificacao',[CordenacaoController::class,'lnotificacao'])->name('lnotificacao');


      Route::get('/enviar_individual/{liceu}',[CordenacaoController::class,'enviar_individual'])->name('enviar_individual');
      Route::get('/enviar_liceu/{liceu}',[CordenacaoController::class,'enviar_liceu'])->name('enviar_liceu');
      Route::get('/not_estudantes/{liceu}',[CordenacaoController::class,'not_estudantes'])->name('not_estudantes');
  
      Route::get('/decima_A/{liceu}/{classe}',[CordenacaoController::class,'decima_A'])->name('decima_A');
      Route::post('/dec_A/{liceu}/{classe}',[CordenacaoController::class,'dec_A'])->name('dec_A');
      Route::get('/enviar_n/{liceu}/{classe}',[CordenacaoController::class,'enviar_n'])->name('enviar_n');


      Route::post('/logout',[CordenacaoController::class,'logout'])->name('logout');    });

});



     
