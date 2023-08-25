<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Aluno;

class AlunoAcess
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
            if( Aluno::where('id_aluno',$id)->first())
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
            dd("Você não esta logado");//mudar depois para uma pagina de erro
                                        //usando return route(error.acessonegado);
        }
    }
}
