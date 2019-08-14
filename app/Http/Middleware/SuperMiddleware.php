<?php
namespace xixha\Http\Middleware;
use Closure;
use Illuminate\Support\Facades\Auth;
class SuperMiddleware{
    public function handle($request, Closure $next){
        if(auth()->check() && auth()->user()->is_admin == 1){
            return $next($request);}
        return redirect('/login');      
    }
}