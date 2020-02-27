<?php
/*
|--------------------------------------------------------------------------
| Componente a librerias
|--------------------------------------------------------------------------| 
*/
    namespace xixha\Http\Middleware;
    use Closure;
    use Illuminate\Support\Facades\Auth;
    /*
    |--------------------------------------------------------------------------
    | Componente UserMiddleware
    |--------------------------------------------------------------------------
    | Este componente verifica si es User y si tiene la condicion is_admin = 0
    | lo redireccionamo a la siguiente etapa, si no lo redireccionamos a login
    |
    */
        class UserMiddleware{
            public function handle($request, Closure $next){
                if(auth()->check() && auth()->user()->is_admin == 0 && auth()->user()->rol == 'User')        
                    return $next($request);
                return redirect('login');
            }
            
        }