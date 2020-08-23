<?php

namespace App\Http\Middleware;

use Closure;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(auth()->user()->is_admin == 1){
            return $next($request);
        }

        if(auth()->user()->is_admin == 0){
            return $next($request);
        }

        if(auth()->user()->is_admin == 2){
            return $next($request);
        }

        if(auth()->user()->is_admin == 3){
            return $next($request);
        }
       
    }
}
