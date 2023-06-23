<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {

            if($request->routeIs('antigo.*')){
                return route('antigo.login');
            }
            if($request->routeIs('empresa.*')){
                return route('empresa.login');
            }
            if($request->routeIs('estudante.*')){
                return route('estudante.login');
            }
            if($request->routeIs('professor.*')){
                return route('professor.login');
            }
            if($request->routeIs('secretaria_administrativa.*')){
                return route('secretaria_administrativa.login');
            }
            if($request->routeIs('secretaria_pedagogica.*')){
                return route('secretaria_pedagogica.login');
            }
            if($request->routeIs('secretaria_geral.*')){
                return route('secretaria_geral.login');
            }
            if($request->routeIs('administracao.*')){
                return route('administracao.login');
            }
            if($request->routeIs('pedagogia.*')){
                return route('pedagogia.login');
            }
            if($request->routeIs('geral.*')){
                return route('geral.login');
            }
            if($request->routeIs('geral.*')){
                return route('geral.login');
            }
            }
            if($request->routeIs('biblioteca.*')){
                return route('biblioteca.login');
            }

            if($request->routeIs('gabinete_psicopedagogo.*')){
                return route('gabinete_psicopedagogo.login');
            }
            if($request->routeIs('coordenacao.*')){
                return route('coordenacao.login');
            }
            if($request->routeIs('tecnico.*')){
                return route('tecnico.login');
            }
           
          
          

          
           
            return route('user.login');
        }
    }

