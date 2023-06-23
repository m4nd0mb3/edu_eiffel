<?php

namespace App\Providers;
use App\Models\EstudanteN;
use App\Models\ProfessorN;
use App\Models\NotificacaoS;
use App\Models\NotificacaoA;
use App\Models\Formacao;
use App\Models\Orientacoe;
use App\Models\NotificacaoP;
use App\Models\NotificacaoG;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(
            'layouts.main_eo',
            function ($view) {
                $id = Auth::guard('estudante')->user();
                $notificacoes =  EstudanteN::where("estudante_id","=",Auth::id())->get();
                $count_not = count($notificacoes);

                $view->with('notificacoes', EstudanteN::where("estudante_id","=",Auth::id())->get());
                $view->with('orientacoes', Orientacoe::where('liceu','=',$id->liceu)->where('classe','=',$id->classe)->get());
                $view->with('count_not', $count_not);
                
            }
        );

        view()->composer(
            'layouts.main_po',
            function ($view) 
            {
                $id = Auth::guard('professor')->user();

              $notificacoes =  ProfessorN::where("professor_id","=",Auth::id())->get();
              $count_not = count($notificacoes);

                $view->with('notificacoes', ProfessorN::where("professor_id","=",Auth::id())->get());
                $view->with('formacoes', Formacao::where("professor_id","=",Auth::id())->get());
                $view->with('count_not', $count_not);
        

              //  return view('professor.main_po', ['notificacoes' => $notificacoes]);
            }
        );

        view()->composer(
            'layouts.main_so',
            function ($view) {
                $id = Auth::guard('secretaria_administrativa')->user();

                $view->with('notificacoes', NotificacaoS::where("secretaria_id","=",Auth::id())->get());
            }
        );
        view()->composer(
            'layouts.main_spo',
            function ($view) {
                $id = Auth::guard('secretaria_pedagogica')->user();
                $notificacoes =  NotificacaoS::where("secretaria_id","=",Auth::id())->get();
                $count_not = count($notificacoes);

                $view->with('notificacoes', NotificacaoS::where("secretaria_id","=",Auth::id())->get());
                $view->with('count_not', $count_not);
            }
        );
        view()->composer(
            'layouts.main_ao',
            function ($view) {
                $id = Auth::guard('administracao')->user();

                $view->with('notificacoes', NotificacaoA::where("administrativo_id","=",Auth::id())->get());
            }
        );
        view()->composer(
            'layouts.main_do',
            function ($view) {

                $id = Auth::guard('pedagogia')->user();

                $notificacoes =  NotificacaoP::where("pedagogia_id","=",Auth::id())->get();
                $count_not = count($notificacoes);
  
                  $view->with('notificacoes', NotificacaoP::where("pedagogia_id","=",Auth::id())->get());
                  $view->with('count_not', $count_not);

            }
        );

        view()->composer(
            'layouts.main_go',
            function ($view) {

                $id = Auth::guard('geral')->user();

                $notificacoes =  NotificacaoG::where("geral_id","=",Auth::id())->get();
                $count_not = count($notificacoes);
  
                  $view->with('notificacoes', NotificacaoG::where("geral_id","=",Auth::id())->get());
                  $view->with('count_not', $count_not);

            }
        );


    }
}
