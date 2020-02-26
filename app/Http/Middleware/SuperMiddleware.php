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
    | Componente SuperMiddleware
    |--------------------------------------------------------------------------
    | Este componente verifica si es usuario esta Autentificado
    | y si tiene la condicion is_admin = 1, lo redirecciona al 
    | directorio a la siguiente etapa, si no lo redirecciona a login(/)
    |
    */
        class SuperMiddleware{
            public function handle($request, Closure $next){
                if(auth()->check() && auth()->user()->is_admin == 1)
                    return $next($request);
                return redirect('login');
                }
            }