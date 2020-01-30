<?php
namespace xixha\Http\Middleware;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {            
            if(auth()->check() && auth()->user()->is_admin == 0 && auth()->user()->rol == 'User'){           
                return redirect('/');
            }elseif (auth()->check() && auth()->user()->is_admin == 1 && auth()->user()->rol == 'Mr.Root'){
                return redirect('root');
            }
            return $next($request);
        }        
    }
}