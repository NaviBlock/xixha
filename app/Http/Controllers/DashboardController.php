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
    | Componente constructor
    |--------------------------------------------------------------------------
    | Crea una nueva instancia en middleware que verifica
    | los permisos del administrador en auth 
    */    
        class DashboardController extends Controller{
            public function __construct(){
                $this->middleware('auth');
            }
     /*
    |--------------------------------------------------------------------------
    | Componente index
    |--------------------------------------------------------------------------
    | Regresa la vista de index al administrador
    | 
    */
        public function index(Request $request){
            return view('dashboard.index');
        }
}