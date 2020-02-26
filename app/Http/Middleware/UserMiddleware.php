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
    | Componente RedirectIfAuthenticated
    |--------------------------------------------------------------------------
    | Este componente verifica si es usuario user 
    | y si tiene la condicion is_admin = 0, lo redirecciona a la 
    | siguiente etapa, si no lo redirecciona a login
    |
    */
        class UserMiddleware{
            public function handle($request, Closure $next){
                if(auth()->check() && auth()->user()->is_admin == 0 && auth()->user()->rol == 'User')        
                    return $next($request);
                return redirect('login');
            }
            
        }