<?php
namespace xixha\Http\Middleware;
use Closure;
use Illuminate\Support\Facades\Auth;
class UserMiddleware{
    public function handle($request, Closure $next){
        if(auth()->check() && auth()->user()->is_admin == 0 && auth()->user()->rol == 'User')        
            return $next($request);
        return redirect('login');
    }
     
}