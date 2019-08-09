<?php
namespace xixha\Http\Middleware;
use Closure;
use Illuminate\Support\Facades\Auth;
class SuperMiddleware
{
    public function __construct()
    {   
    
        $this->middleware('auth');
        $this->middleware('super');
    }
    public function handle($request, Closure $next)
    {
        if(auth()->check() && auth()->user()->is_user == 0){       
            if(auth()->check() && auth()->user()->is_root == 0 ){
                if (auth()->check() && auth()->user()->is_admin == 0){
                    if(auth()->check() && auth()->user()->is_super == 1 ){
                        return $next($request);
                    }
                }
            }    
        }
        return redirect('/home');
    }
}