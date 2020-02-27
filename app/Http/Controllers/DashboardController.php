<?php
/*
|--------------------------------------------------------------------------
| Componente a librerias
|--------------------------------------------------------------------------| 
*/
    namespace xixha\Http\Controllers;
    use Illuminate\Http\Request;
    use xixha\Http\Requests;
/*
|--------------------------------------------------------------------------
| Controlador DashboardController
|--------------------------------------------------------------------------
*/    
class DashboardController extends Controller{
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
    | Regresa la vista de index al usuario cuando es llamado por el route
    | 
    */
        public function index(Request $request){
            return view('dashboard.index');
        }
}