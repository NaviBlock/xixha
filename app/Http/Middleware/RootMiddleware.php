<?php
namespace xixha\Http\Middleware;
use Closure;
use Illuminate\Support\Facades\Auth;
class RootMiddleware{
    public function handle($request, Closure $next){
        //if(auth()->check() && auth()->user()->is_admin == 1 && auth()->user()->rol == 'Mr.Root')
       /* if(auth()->check())
            return $next($request);
        return redirect('login');*/
        if(auth()->check() && auth()->user()->is_admin == 1 && auth()->user()->rol == 'Mr.Root')
            return $next($request);
        return redirect('login');
    }
}