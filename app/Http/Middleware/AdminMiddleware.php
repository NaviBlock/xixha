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
    | Componente AdminMiddleware
    |--------------------------------------------------------------------------
    | Este componente verifica si el usuario Administrador esta Autentificado,  
    | y si tiene la condicion is_admin = 1, si no lo redirecciona a login
    */
        class AdminMiddleware{
            public function handle($request, Closure $next){
                if(auth()->check() && auth()->user()->is_admin == 1)
                    return $next($request);
                return redirect('login');
                }
            }