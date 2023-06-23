<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\EstudanteN;
use App\Models\ProfessorN;
use App\Models\NotificacaoS;
use App\Models\NofiticacaoPe;
use App\Models\Formacao;
use App\Models\Orientacoe;
use App\Models\NotificacaoPe;

use Illuminate\Support\Facades\Auth;


class ContentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(
            'layouts.main_eo',
            function ($view) {
                $id = Auth::guard('estudante')->user();

                $view->with('notificacoes', EstudanteN::where("estudante_id","=",Auth::id())->get());
                $view->with('orientacoes', Orientacoe::where('liceu','=',$id->liceu)->where('classe','=',$id->classe)->get());
            }
        );

        view()->composer(
            'layouts.main_po',
            function ($view) {
                $id = Auth::guard('professor')->user();

                $view->with('$notificacoes', ProfessorN::where("professor_id","=",Auth::id())->get());
                $view->with('formacoes', Formacao::where("professor_id","=",Auth::id())->get());

              //  return view('professor.main_po', ['notificacoes' => $notificacoes]);
            }
        );

        view()->composer(
            'layouts.main_so',
            function ($view) {
                $id = Auth::guard('secretario')->user();

                $view->with('notificacoes', NotificacaoS::where("secretaria_id","=",Auth::id())->get());
            }
        );
        view()->composer(
            'layouts.main_ao',
            function ($view) {
                $id = Auth::guard('administrativos')->user();

                $view->with('notificacoes', NofiticacaoA::where("administrativo_id","=",Auth::id())->get());
            }
        );

        view()->composer(
            'layouts.main_do',
            function ($view) {
                $id = Auth::guard('pedagogias')->user();

                $view->with('notificacoes', NofiticacaoPe::where("pedagogico_id","=",Auth::id())->get());
            }
        );
    }
}
