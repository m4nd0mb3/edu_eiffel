
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\Geral\GeralController;





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

Route::prefix('geral')->name('geral.')->group(function(){
  
    Route::middleware(['guest:geral','PreventBackHistory'])->group(function(){
        Route::view('/login','geral.login')->name('login');
      // Route::view('/register','ondjiva.geral.register')->name('register');
        Route::get('/register',[GeralController::class,'register'])->name('register');
        Route::post('/create',[GeralController::class,'create'])->name('create');
        Route::post('/check',[GeralController::class,'check'])->name('check');
    });

  Route::middleware(['auth:geral','PreventBackHistory'])->group(function(){
        Route::get('/home',[GeralController::class,'home'])->name('home');
        
        Route::get('/diretores',[GeralController::class,'diretores'])->name('diretores');
        Route::get('/ver_info_directorp/{id}',[GeralController::class,'ver_info_directorp'])->name('ver_info_directorp');
        Route::get('/ver_info_directora/{id}',[GeralController::class,'ver_info_directora'])->name('ver_info_directora');
  
        Route::get('/secretarios',[GeralController::class,'secretarios'])->name('secretarios');
        Route::get('/ver_info_secretarios/{id}',[GeralController::class,'ver_info_secretarios'])->name('ver_info_secretarios');
        

        Route::get('/falta_directores',[GeralController::class,'falta_directores'])->name('falta_directores');
        Route::get('/falta_pedagogico',[GeralController::class,'falta_pedagogico'])->name('falta_pedagogico');
        Route::post('/pedagogico',[GeralController::class,'pedagogico'])->name('pedagogico');
        Route::get('/falta_administrativa',[GeralController::class,'falta_administrativa'])->name('falta_administrativa');
        Route::post('/administrativo',[GeralController::class,'administrativo'])->name('administrativo');
        Route::get('/falta_secretario',[GeralController::class,'falta_secretario'])->name('falta_secretario');
        Route::post('/secretario',[GeralController::class,'secretario'])->name('secretario');
        Route::get('/ver_falta',[GeralController::class,'ver_falta'])->name('ver_falta');

        Route::get('/professores',[GeralController::class,'professores'])->name('professores');
     //   Route::get('/falta_professores',[GeralController::class,'falta_professores'])->name('falta_professores');
      
        //Route::post('/falta_professor',[GeralController::class,'falta_professor'])->name('falta_professor');
        Route::get('/ultimo_dado',[GeralController::class,'ultimo_dado'])->name('ultimo_dado');
       
        Route::get('/ver_falta_professor',[GeralController::class,'ver_falta_professor'])->name('ver_falta_professor');
        Route::get('/ver_info_falta_professor/{liceu}/{id}',[GeralController::class,'ver_info_falta_professor'])->name('ver_info_falta_professor');
  

        Route::get('/ver_boletim_professor/{id}',[GeralController::class, 'ver_boletim_professor'])->name('ver_boletim_professor');
        Route::get('/ver_info_nota_professor/{id}',[GeralController::class, 'ver_info_nota_professor'])->name('ver_info_nota_professor');
        Route::post('/validar_nota_professor/{id}',[GeralController::class, 'validar_nota_professor'])->name('validar_nota_professor');

        
        Route::get('/declaracoes_professores',[GeralController::class,'declaracoes_professores'])->name('declaracoes_professores');
      
        Route::get('/recursos',[GeralController::class,'recursos'])->name('recursos');
     
        Route::get('/orientacoes_enviadas',[GeralController::class,'orientacoes_enviadas'])->name('orientacoes_enviadas');
        Route::get('/ver_orientacao_professor/{id}',[GeralController::class,'ver_orientacao_professor'])->name('ver_orientacao_professor');
     
        Route::get('/plano_enviados',[GeralController::class,'plano_enviados'])->name('plano_enviados');
        Route::get('/ver_plano_professor/{id}',[GeralController::class,'ver_plano_professor'])->name('ver_plano_professor');
       // Route::get('/ver_orientacao_professor/{id}',[GeralController::class,'ver_orientacao_professor'])->name('ver_orientacao_professor');
  


       Route::get('/estudantes',[GeralController::class,'estudantes'])->name('estudantes');
       Route::get('/turma_a/{liceu}/{classe}',[GeralController::class,'turma_a'])->name('turma_a');
       Route::get('/ver_turma_as/{id}',[GeralController::class,'ver_turma_as'])->name('ver_turma_as');
   
       Route::get('/ver_falta_estudante/{liceu}',[GeralController::class,'ver_falta_estudante'])->name('ver_falta_estudante');
       Route::get('/ver_info_falta_estudante/{classe}',[GeralController::class,'ver_info_falta_estudante'])->name('ver_info_falta_estudante');
       Route::get('/ver_info_falta_total_estudante/{liceu}/{classe}/{id}',[GeralController::class,'ver_info_falta_total_estudante'])->name('ver_info_falta_total_estudante');
     
        Route::get('/ver_festudante',[GeralController::class,'ver_festudante'])->name('ver_festudante');
        Route::get('/notificacao_pedagogico',[GeralController::class,'notificacao_pedagogico'])->name('notificacao_pedagogico');
        Route::post('/noti_pedagogico',[GeralController::class,'noti_pedagogico'])->name('noti_pedagogico');
        Route::get('/notificacao_administrativo',[GeralController::class,'notificacao_administrativo'])->name('notificacao_administrativo');
        Route::post('/noti_administrativo',[GeralController::class,'noti_administrativo'])->name('noti_administrativo');
        Route::get('/notificacao_professor',[GeralController::class,'notificacao_professor'])->name('notificacao_professor');
        Route::post('/noti_professor',[GeralController::class,'noti_professor'])->name('noti_professor');

        Route::get('/notificacao_secretario',[GeralController::class,'notificacao_secretario'])->name('notificacao_secretario');
        Route::post('/noti_secretario',[GeralController::class,'noti_secretario'])->name('noti_secretario');
      
        // Noticação
       // Noticação
       Route::get('/enviar_nestudante',[GeralController::class,'enviar_nestudante'])->name('enviar_nestudante');
       Route::get('/decima_A/{liceu}/{classe}',[GeralController::class,'decima_A'])->name('decima_A');
       Route::post('/dec_A/{liceu}/{classe}',[GeralController::class,'dec_A'])->name('dec_A');
 
        Route::get('/add_funcionario',[GeralController::class,'add_funcionario'])->name('add_funcionario');
        Route::post('/enviar_dados ',[GeralController::class,'enviar_dados'])->name('enviar_dados');

        Route::get('/enviar_formacao',[GeralController::class,'enviar_formacao'])->name('enviar_formacao');
        Route::post('/formacao',[GeralController::class,'formacao'])->name('formacao');
        Route::get('/ver_formacao',[GeralController::class,'ver_formacao'])->name('ver_formacao');
      
        Route::get('/declaracoes_estudantes',[GeralController::class,'declaracoes_estudantes'])->name('declaracoes_estudantes');
        Route::get('/ver_totalnotificacoes',[GeralController::class,'ver_totalnotificacoes'])->name('ver_totalnotificacoes');
        Route::get('/consultoria',[GeralController::class,'consultoria'])->name('consultoria');
      
        Route::get('/ver_dado_estudante/{id}',[GeralController::class, 'ver_dado_estudante'])->name('ver_dado_estudante');;
        Route::get('/ver_dado_professor/{id}',[GeralController::class, 'ver_dado_professor'])->name('ver_dado_professor');;
        Route::get('/ver_dado_funcionario/{id}',[GeralController::class, 'ver_dado_funcionario'])->name('ver_dado_funcionario');;
       
        Route::get('/imprimir_boletim/{classe}',[GeralController::class,'imprimir_boletim'])->name('imprimir_boletim');
        Route::get('/imprimir',[GeralController::class,'imprimir'])->name('imprimir');
        Route::get('/tipo_boletim',[GeralController::class,'tipo_boletim'])->name('tipo_boletim');
      
        
        Route::get('/ver_nota_validada',[GeralController::class,'ver_nota_validada'])->name('ver_nota_validada');
        Route::get('/ver_boletim_professor_validada/{id}',[GeralController::class, 'ver_boletim_professor_validada'])->name('ver_boletim_professor_validada');
        Route::get('/ver_info_nota_professor_validada/{professor_id}/{created_at}',[GeralController::class, 'ver_info_nota_professor_validada'])->name('ver_info_nota_professor_validada');

        Route::get('/relatar',[GeralController::class,'relatar'])->name('relatar');
        Route::get('/ver_relatos',[GeralController::class,'ver_relatos'])->name('ver_relatos');
        Route::post('/enviar_relato',[GeralController::class,'enviar_relato'])->name('enviar_relato');
     
        Route::get('/noti_recebida',[GeralController::class,'noti_recebida'])->name('noti_recebida');
        Route::get('/mark/{id}',[GeralController::class,'mark'])->name('mark');
        Route::get('/imprimir_individual/{id}',[GeralController::class,'imprimir_individual'])->name('imprimir_individual');
      
        Route::get('/alterar_senha',[GeralController::class,'alterar_senha'])->name('alterar_senha');
        Route::post('/alterar_s',[GeralController::class,'alterar_s'])->name('alterar_s');
     
        Route::get('/add_funcionario',[GeralController::class,'add_funcionario'])->name('add_funcionario');
        Route::get('/funcionario',[GeralController::class,'funcionario'])->name('funcionario');
        Route::get('/f_funcionario',[GeralController::class,'f_funcionario'])->name('f_funcionario');
        Route::get('/ver_faltaf',[GeralController::class,'ver_faltaf'])->name('ver_faltaf');
        Route::post('/falta_funcionario',[GeralController::class,'falta_funcionario'])->name('falta_funcionario');
        Route::get('/ver_nota',[GeralController::class,'ver_nota'])->name('ver_nota');


        Route::get('/enviar_pct',[GeralController::class,'enviar_pct'])->name('enviar_pct');  
        Route::get('/ver_pct_professor/{id}',[GeralController::class,'ver_pct_professor'])->name('ver_pct_professor');  
        Route::get('/ver_info_pct_professor/{id}',[GeralController::class,'ver_info_pct_professor'])->name('ver_info_pct_professor');  
        Route::post('/enviar_nota_pct/{liceu}/{classe}/{created_at}',[GeralController::class,'enviar_nota_pct'])->name('enviar_nota_pct');
     
        Route::get('/ver_pct_validada',[GeralController::class,'ver_pct_validada'])->name('ver_pct_validada');
        Route::get('/ver_nota_professor_pct_validada/{created_at}',[GeralController::class,'ver_nota_professor_pct_validada'])->name('ver_nota_professor_pct_validada');
        Route::get('/ver_info_nota_professor_pct/{created_at}',[GeralController::class, 'ver_info_nota_professor_pct'])->name('ver_info_nota_professor_pct');

        
        Route::get('/form',[GeralController::class,'form'])->name('form');
        Route::get('/ver_dados',[GeralController::class,'ver_dados'])->name('ver_dados');
        Route::post('/edit_inf',[GeralController::class,'edit_inf'])->name('edit_inf');
        
        Route::post('/logout',[GeralController::class,'logout'])->name('logout');    });

});
