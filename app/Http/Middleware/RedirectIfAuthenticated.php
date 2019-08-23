<?php

namespace xixha\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            //return redirect('/');
            if(auth()->check() && auth()->user()->is_admin == 0 && auth()->user()->rol == 'User'){
                return redirect('/');
            }elseif (auth()->check() && auth()->user()->is_admin == 1 && auth()->user()->rol == 'Admin'){
                return redirect('administradors');
            }
        }
        return $next($request);
    }
}