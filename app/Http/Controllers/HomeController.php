<?php
/*
|--------------------------------------------------------------------------
| Componente a librerias
|--------------------------------------------------------------------------| 
*/
    namespace xixha\Http\Controllers;
    use xixha\Http\Requests;
    use Illuminate\Http\Request;
    use xixha\User;
    use Illuminate\Support\Facades\Redirect;
    use xixha\Http\Requests\UsuarioFormRequest;
    use DB;
    /*
    |--------------------------------------------------------------------------
    | Componente constructor
    |--------------------------------------------------------------------------
    | Crea una nueva instancia en middleware que verifica
    | los permisos del administrador en auth 
    */
        class HomeController extends Controller{  
            public function __construct(){
                $this->middleware('auth');
            }
     /*
    |--------------------------------------------------------------------------
    | Componente index
    |--------------------------------------------------------------------------
    | Regresa la vista de index al usuario
    | 
    */
        public function index(){
            return view('home');
        }
}