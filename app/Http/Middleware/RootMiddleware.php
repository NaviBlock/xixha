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
    | Componente RootMiddleware
    |--------------------------------------------------------------------------
    | Este componente verifica si es usuario Mr.Root, si tiene la condicion
    | is_admin = 1, lo redirecciona al directorio a la siguiente etapa,
    | si no lo redirecciona a login(/)
    |
    */
        class RootMiddleware{
            public function handle($request, Closure $next){
                if(auth()->check() && auth()->user()->is_admin == 1 && auth()->user()->rol == 'Mr.Root')        
                    return $next($request);
                return redirect('login');
            }
        }