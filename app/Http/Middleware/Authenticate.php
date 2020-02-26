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
    | Componente Authenticate
    |--------------------------------------------------------------------------
    | Componente de Autentificación de laravel
    | 
    */
        class Authenticate{
            public function handle($request, Closure $next, $guard = null){
                if (Auth::guard($guard)->guest()) {
                    if ($request->ajax()) {
                        return response('Unauthorized.', 401);
                    }         
                        return redirect()->guest('login');
                    }        
                return $next($request);
            }
        }