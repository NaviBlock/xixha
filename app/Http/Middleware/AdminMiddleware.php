<?php
namespace xixha\Http\Middleware;
use Closure;
use Illuminate\Support\Facades\Auth;
class AdminMiddleware{
    public function handle($request, Closure $next){
       /* if (auth()->check() && auth()->user()->is_root == 0){
            if(auth()->check() && auth()->user()->is_admin == 0 ){
                if(auth()->check() && auth()->user()->is_super == 0 ){
                    if(auth()->check() && auth()->user()->is_user == 0){
                        return $next($request);
                    }
                }
            }
        }             
        return redirect('/home');*/
    }
}