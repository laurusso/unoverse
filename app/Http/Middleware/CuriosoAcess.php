<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CuriosoAcess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check() && Auth::user()->curioso == 1)
        {
            return $next($request);
        }
        else{
            /*
                if(!Auth::check()){
                    return redirect('/login);
                }
            */
            dd("você não tem acesso");//mudar depois para uma pagina de erro
                                        //usando return route(error.acessonegado);
        }
    }
}
