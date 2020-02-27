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
| Controlador HomeController
|--------------------------------------------------------------------------
*/
class HomeController extends Controller{  
    /*
    |--------------------------------------------------------------------------
    | Componente constructor
    |--------------------------------------------------------------------------
    | Crea una nueva instancia a middleware que verifica
    | los permisos del usuario en auth 
    |
    */
        public function __construct(){
            $this->middleware('auth');
        }
     /*
    |--------------------------------------------------------------------------
    | Componente index
    |--------------------------------------------------------------------------
    | Regresa la vista index al usuario cuando es llamado por el route
    | 
    */
        public function index(){
            return view('home');
        }
}