<?php
namespace xixha\Http\Middleware;
use Closure;
use Illuminate\Support\Facades\Auth;
class SuperMiddleware{
    public function handle($request, Closure $next){
        if(auth()->check() && auth()->user()->is_admin == 1 && auth()->user()->rol == 'Super'){
            return $next($request);}
        return redirect('/login');      
    }
}