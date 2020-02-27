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
    | Este componente verifica si es usuario user o Mr.Root 
    | #Si es Mr.Root y is_admin = 1 lo redirecciona al directorio root
    | #Si es User y is_admin = 0 lo redirecciona a raiz(/)
    | #Si no cumple con las condicion lo redirecciona a login
    */
        class RedirectIfAuthenticated{
            public function handle($request, Closure $next, $guard = null){
                if (Auth::guard($guard)->check()) {            
                    if(auth()->check() && auth()->user()->is_admin == 0 && auth()->user()->rol == 'User'){           
                        return redirect('/');            
                    }elseif (auth()->check() && auth()->user()->is_admin == 1 && auth()->user()->rol == 'Mr.Root'){
                        return redirect('root');
                    }
                }
                return $next($request);
            }
        }