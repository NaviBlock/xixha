<?php
namespace xixha\Http\Middleware;
use Closure;
use Illuminate\Support\Facades\Auth;
class SuperMiddleware{
    public function handle($request, Closure $next){
      /* if(auth()->check() && auth()->user()->is_user == 1 && auth()->user()->is_super == 0 && auth()->user()->is_admin == 0 && auth()->user()->is_root == 0)
            return $next($request);
        return redirect('login');*/

            //return redirect('login');
            if(auth()->check() && auth()->user()->is_user == 1){
                if(auth()->user()->is_admin == 0){
                    if(auth()->user()->is_root == 0){
                        if(auth()->user()->is_super == 0){
                            return $next($request);
                        }return redirect('login');
                    }
                }
            }
        }
    }