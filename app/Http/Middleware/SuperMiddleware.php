<?php

namespace xixha\Http\Middleware;

use Closure;

class SuperMiddleware
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
        if (auth()->check() && auth()->user()->is_admin)
            return $next($request);    
    
        return redirect('/');            
    }
}