<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ProfAcess
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
        if(Auth::check() )
        {
            $id = Auth::user()->id;
            if( Professor::where('id_prof',$id)->first())
                { return $next($request);}
            else{
                dd("você não tem acesso");
            }
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
