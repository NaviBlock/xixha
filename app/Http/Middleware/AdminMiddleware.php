<?php
namespace xixha\Http\Middleware;
use Closure;
use Illuminate\Support\Facades\Auth;
class AdminMiddleware
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function handle($request, Closure $next){                   
        if (auth()->check() && auth()->user()->is_root){
            if(auth()->check() && auth()->user()->is_admin ){
                if(auth()->check() && auth()->user()->is_super){
                    if(auth()->check() && !auth()->user()->is_user){
                        return $next($request);
                    }
                }
            }
        }       
        return redirect('/home');
    }
}