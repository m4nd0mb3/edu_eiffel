

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\Pedagogia\PedagogicoController;





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


Route::prefix('pedagogia')->name('pedagogia.')->group(function(){
  
  Route::middleware(['guest:pedagogia','PreventBackHistory'])->group(function(){
      Route::view('/login','pedagogia.login')->name('login');
  //   Route::view('/register','ondjiva.pedagogia.register')->name('register');
      Route::post('/create',[PedagogicoController::class,'create'])->name('create');
      Route::get('/register',[PedagogicoController::class,'register'])->name('register');
      Route::post('/check',[PedagogicoController::class,'check'])->name('check');
  });

  Route::middleware(['auth:pedagogia','PreventBackHistory'])->group(function(){
      
    //  Route::view('/home','ondjiva.pedagogia.home')->name('home');
      Route::get('/home',[PedagogicoController::class,'home'])->name('home');
      Route::get('/professores',[PedagogicoController::class,'professores'])->name('professores');
      Route::get('/falta_professores',[PedagogicoController::class,'falta_professores'])->name('falta_professores');
    
    
      Route::post('/falta_professor',[PedagogicoController::class,'falta_professor'])->name('falta_professor');
      Route::get('/ver_falta_professor/{id}',[PedagogicoController::class,'ver_falta_professor'])->name('ver_falta_professor');
      Route::get('/ver_info_falta_professor/{liceu}/{id}',[PedagogicoController::class,'ver_info_falta_professor'])->name('ver_info_falta_professor');
      Route::get('/imprimir_cardeneta/{liceu}/{classe}/{trimestre_id}', [PedagogicoController::class, 'imprimir_cardeneta'])->name('imprimir_cardeneta');
      Route::get('/listar_cardeneta/{liceu}', [PedagogicoController::class, 'listar_cardeneta'])->name('listar_cardeneta');

      Route::get('/declaracoes_professores',[PedagogicoController::class,'declaracoes_professores'])->name('declaracoes_professores');
      Route::get('/orientacoes_enviadas',[PedagogicoController::class,'orientacoes_enviadas'])->name('orientacoes_enviadas');
      Route::get('/enviar_notificacao',[PedagogicoController::class,'enviar_notificacao'])->name('enviar_notificacao');
      Route::post('/notificacao',[PedagogicoController::class,'notificacao'])->name('notificacao');
   
      Route::get('/ver_nota',[PedagogicoController::class,'ver_nota'])->name('ver_nota');
     
      Route::get('/ver_nota_pct',[PedagogicoController::class,'ver_nota_pct'])->name('ver_nota_pct');

      Route::get('/enviar_pct',[PedagogicoController::class,'enviar_pct'])->name('enviar_pct');  
      Route::get('/classe/{liceu}/{classe}',[PedagogicoController::class,'classe'])->name('classe');
      Route::post('/enviar_nota_pct/{liceu}/{classe}',[PedagogicoController::class,'enviar_nota_pct'])->name('enviar_nota_pct');
       


      Route::get('/plano_enviados',[PedagogicoController::class,'plano_enviados'])->name('plano_enviados');
      Route::get('/ver_plano_professor/{id}',[PedagogicoController::class,'ver_plano_professor'])->name('ver_plano_professor');
  
      Route::get('/ver_orientacao_professor/{id}',[PedagogicoController::class,'ver_orientacao_professor'])->name('ver_orientacao_professor');

      Route::get('/estudantes',[PedagogicoController::class,'estudantes'])->name('estudantes');
      Route::get('/turma_a/{liceu}/{classe}',[PedagogicoController::class,'turma_a'])->name('turma_a');
      Route::get('/ver_turma_as/{id}',[PedagogicoController::class,'ver_turma_as'])->name('ver_turma_as');
  
      Route::get('/ver_falta_estudante/{liceu}',[PedagogicoController::class,'ver_falta_estudante'])->name('ver_falta_estudante');
      Route::get('/ver_info_falta_estudante/{classe}',[PedagogicoController::class,'ver_info_falta_estudante'])->name('ver_info_falta_estudante');
      Route::get('/ver_info_falta_total_estudante/{liceu}/{classe}/{id}',[PedagogicoController::class,'ver_info_falta_total_estudante'])->name('ver_info_falta_total_estudante');
    
    
      
      Route::get('/ver_festudante',[PedagogicoController::class,'ver_festudante'])->name('ver_festudante');
      Route::get('/ver_falta',[PedagogicoController::class,'ver_falta'])->name('ver_falta');

      // Noticação
      Route::get('/enviar_nestudante',[PedagogicoController::class,'enviar_nestudante'])->name('enviar_nestudante');
      Route::get('/decima_A/{liceu}/{classe}',[PedagogicoController::class,'decima_A'])->name('decima_A');
      Route::post('/dec_A/{liceu}/{classe}',[PedagogicoController::class,'dec_A'])->name('dec_A');


   
      Route::get('/decima_B',[PedagogicoController::class,'decima_B'])->name('decima_B');
      Route::post('/dec_B',[PedagogicoController::class,'dec_B'])->name('dec_B');

      Route::get('/decimap_A',[PedagogicoController::class,'decimap_A'])->name('decimap_A');
      Route::post('/dep_A',[PedagogicoController::class,'dep_A'])->name('dep_A');

      Route::get('/decimap_B',[PedagogicoController::class,'decimap_B'])->name('decimap_B');
      Route::post('/dep_B',[PedagogicoController::class,'dep_B'])->name('dep_B');

      Route::get('/decimas_A',[PedagogicoController::class,'decimas_A'])->name('decimas_A');
      Route::post('/des_A',[PedagogicoController::class,'des_A'])->name('des_A');

      Route::get('/decimas_B',[PedagogicoController::class,'decimas_B'])->name('decimas_B');
      Route::post('/des_B',[PedagogicoController::class,'des_B'])->name('des_B');


      // Formação
      Route::get('/enviar_formacao',[PedagogicoController::class,'enviar_formacao'])->name('enviar_formacao');
      Route::post('/formacao',[PedagogicoController::class,'formacao'])->name('formacao');
      Route::get('/ver_formacao',[PedagogicoController::class,'ver_formacao'])->name('ver_formacao');
    
      Route::get('/declaracoes_estudantes',[PedagogicoController::class,'declaracoes_estudantes'])->name('declaracoes_estudantes');

      Route::get('/ver_totalnotificacoes',[PedagogicoController::class,'ver_totalnotificacoes'])->name('ver_totalnotificacoes');

      Route::get('/notificacaos',[PedagogicoController::class,'notificacaos'])->name('notificacaos');

      Route::get('/funcionario',[PedagogicoController::class,'funcionario'])->name('funcionario');

      Route::get('/avalicao_professor',[PedagogicoController::class,'avalicao_professor'])->name('avalicao_professor');
      Route::get('/ver_avaliacao',[PedagogicoController::class,'ver_avaliacao'])->name('ver_avaliacao');
      Route::post('/avaliacao',[PedagogicoController::class,'avaliacao'])->name('avaliacao');
      Route::post('/enviar_nota/{liceu}/{classe}/{created_at}',[PedagogicoController::class,'enviar_nota'])->name('enviar_nota');
      
      Route::post('/invalidar/{liceu}/{classe}',[PedagogicoController::class,'invalidar'])->name('invalidar');


      //Notas

      Route::view('/turmas','ondjiva.pedagogia.turmas')->name('turmas');

      Route::get('/turma_A',[PedagogicoController::class,'turman_A'])->name('turman_A');
      Route::post('/tur_A',[PedagogicoController::class,'tur_A'])->name('tur_A');
   
      Route::get('/turma_B',[PedagogicoController::class,'turman_B'])->name('turman_B');
      Route::post('/tur_B',[PedagogicoController::class,'tur_B'])->name('tur_B');

      Route::get('/turmap_A',[PedagogicoController::class,'turmap_A'])->name('turmap_A');
      Route::post('/turp_A',[PedagogicoController::class,'turp_A'])->name('turp_A');

      Route::get('/turmap_B',[PedagogicoController::class,'turmap_B'])->name('turmap_B');
      Route::post('/turp_B',[PedagogicoController::class,'turp_B'])->name('turp_B');

      Route::get('/turmas_A',[PedagogicoController::class,'turmas_A'])->name('turmas_A');
      Route::post('/turs_A',[PedagogicoController::class,'turs_A'])->name('turs_A');

      Route::get('/turmas_B',[PedagogicoController::class,'turmas_B'])->name('turmas_B');
      Route::post('/turs_B',[PedagogicoController::class,'turs_B'])->name('turs_B');

      Route::get('/ver_dado_estudante/{id}',[PedagogicoController::class, 'ver_dado_estudante'])->name('ver_dado_estudante');;
      Route::get('/ver_dado_professor/{id}',[PedagogicoController::class, 'ver_dado_professor'])->name('ver_dado_professor');;
     
      Route::post('/logout',[PedagogicoController::class,'logout'])->name('logout');

      Route::get('/ver_dado_estudante/{id}',[PedagogicoController::class, 'ver_dado_estudante'])->name('ver_dado_estudante');;
      Route::get('/ver_dado_professor/{id}',[PedagogicoController::class, 'ver_dado_professor'])->name('ver_dado_professor');;
     
      Route::get('/ver_boletim_professor/{id}',[PedagogicoController::class, 'ver_boletim_professor'])->name('ver_boletim_professor');
      Route::get('/ver_boletim_professor_pct/{id}',[PedagogicoController::class, 'ver_boletim_professor_pct'])->name('ver_boletim_professor_pct');
      Route::get('/ver_info_nota_professor/{id}',[PedagogicoController::class, 'ver_info_nota_professor'])->name('ver_info_nota_professor');
      Route::get('/ver_info_nota_professor_pct/{id}',[PedagogicoController::class, 'ver_info_nota_professor_pct'])->name('ver_info_nota_professor_pct');
      Route::post('/validar_nota_professor/{id}',[PedagogicoController::class, 'validar_nota_professor'])->name('validar_nota_professor');



      Route::get('/ver_nota_validada',[PedagogicoController::class,'ver_nota_validada'])->name('ver_nota_validada');
      Route::get('/ver_boletim_professor_validada/{id}',[PedagogicoController::class, 'ver_boletim_professor_validada'])->name('ver_boletim_professor_validada');
      Route::get('/ver_info_nota_professor_validada/{professor_id}/{created_at}',[PedagogicoController::class, 'ver_info_nota_professor_validada'])->name('ver_info_nota_professor_validada');

      Route::get('/ver_nota_antiga',[PedagogicoController::class,'ver_nota_antiga'])->name('ver_nota_antiga');
      Route::get('/ver_nota_professor_ondjiva_antiga_um/{id}',[PedagogicoController::class, 'ver_nota_professor_ondjiva_antiga_um'])->name('ver_nota_professor_ondjiva_antiga_um');
      Route::get('/ver_info_nota_professor_ondjia_um/{professor_id}/{created_at}',[PedagogicoController::class, 'ver_info_nota_professor_ondjia_um'])->name('ver_info_nota_professor_ondjia_um');

      Route::get('/ver_nota_antiga_dois',[PedagogicoController::class,'ver_nota_antiga_dois'])->name('ver_nota_antiga_dois');
      Route::get('/ver_nota_professor_ondjiva_antiga_dois/{id}',[PedagogicoController::class, 'ver_nota_professor_ondjiva_antiga_dois'])->name('ver_nota_professor_ondjiva_antiga_dois');
      Route::get('/ver_info_nota_professor_ondjia_dois/{professor_id}/{created_at}',[PedagogicoController::class, 'ver_info_nota_professor_ondjia_dois'])->name('ver_info_nota_professor_ondjia_dois');

      Route::get('/imprimir_boletim/{classe}',[PedagogicoController::class,'imprimir_boletim'])->name('imprimir_boletim');
      Route::get('/imprimir',[PedagogicoController::class,'imprimir'])->name('imprimir');
      Route::get('/tipo_boletim',[PedagogicoController::class,'tipo_boletim'])->name('tipo_boletim');
    
      Route::get('/form',[PedagogicoController::class,'form'])->name('form');
      Route::get('/mark/{id}',[PedagogicoController::class,'mark'])->name('mark');
      Route::get('/imprimir_individual/{id}',[PedagogicoController::class,'imprimir_individual'])->name('imprimir_individual');
      Route::get('/imprimir_falta_estudante/{id}',[PedagogicoController::class,'imprimir_falta_estudante'])->name('imprimir_falta_estudante');
      
      Route::get('/noti_recebida',[PedagogicoController::class,'noti_recebida'])->name('noti_recebida');
      Route::get('/ver_dados',[PedagogicoController::class,'ver_dados'])->name('ver_dados');
      Route::post('/edit_inf',[PedagogicoController::class,'edit_inf'])->name('edit_inf');
      Route::get('/ultimo_dado',[PedagogicoController::class,'ultimo_dado'])->name('ultimo_dado');
  
      Route::get('/alterar_senha',[PedagogicoController::class,'alterar_senha'])->name('alterar_senha');
      Route::post('/alterar_s',[PedagogicoController::class,'alterar_s'])->name('alterar_s');
   

      Route::get('/relatar',[PedagogicoController::class,'relatar'])->name('relatar');
      Route::get('/ver_relatos',[PedagogicoController::class,'ver_relatos'])->name('ver_relatos');
      Route::post('/enviar_relato',[PedagogicoController::class,'enviar_relato'])->name('enviar_relato');
     
    });

});

