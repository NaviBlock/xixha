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
    | y si tiene la condicion is_admin = 1, lo redirecciona al 
    | directorio root, si no lo redirecciona a raiz(/)
    | si no cumple las condicion inicial lo redirecciona a login
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