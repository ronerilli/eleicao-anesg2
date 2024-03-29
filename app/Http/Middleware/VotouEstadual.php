<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
Use Illuminate\Support\Facades\Auth;

class VotouEstadual
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!is_null(Auth::user())){
            if (Auth::user()->votou_estadual == '0')
        {
            return $next($request);
        }
        
        return redirect('/')->with('error','O seu voto já foi computado para este cargo.'); ;
    }
    
    return redirect('/')->with('error','Você precisa estar logado para votar.');    
    } 
     
}
