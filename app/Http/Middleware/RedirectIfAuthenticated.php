<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {

                if($guard === 'estudannte'){
                    return redirect()->route('estudannte.home');
                }
                if($guard === 'professor'){
                    return redirect()->route('professor.home');
                }
                if($guard === 'secretaria_pedagogica'){
                    return redirect()->route('secretaria_pedagogica.home');
                }
                if($guard === 'secretaria_geral'){
                    return redirect()->route('secretaria_geral.home');
                }
                if($guard === 'secretaria_administrativa'){
                    return redirect()->route('secretaria_administrativa.home');
                }
                if($guard === 'administracao'){
                    return redirect()->route('administracao.home');
                }
                if($guard === 'pedagogia'){
                    return redirect()->route('pedagogia.home');
                }
                if($guard === 'geral'){
                    return redirect()->route('geral.home');
                }
                if($guard === 'biblioteca'){
                    return redirect()->route('biblioteca.home');
                }

                //Caxito
             
                if($guard === 'gabinete_psicopedagogico'){
                    return redirect()->route('gabinete_psicopedagogico.home');
              
                if($guard === 'pais'){
                    return redirect()->route('pais.home');
                }

                if($guard === 'coordenacao'){
                    return redirect()->route('coordenacao.home');
                }
                if($guard === 'tecnico'){
                    return redirect()->route('tecnico.home');
                }

             
              return redirect()->route('user.home');
                
                //return redirect(RouteServiceProvider::HOME);
            }
        }

        return $next($request);
    }
}
}
