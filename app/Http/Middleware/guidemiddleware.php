<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class guidemiddleware
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
        if(Auth::user()->user_type=='gud')
        {
        return $next($request);
        }else  if(Auth::user()->user_type=='drv')
        {
          return $next($request);
        }else if(Auth::user()->user_type=='eqp')
        {
            return $next($request); 
        }else 
        {
            return redirect('/home');
        }
    }
}
