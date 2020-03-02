<?php
/*
|--------------------------------------------------------------------------
| Componente a librerias
|--------------------------------------------------------------------------
*/
namespace xixha\Http\Controllers\Auth;
use xixha\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
/*
|--------------------------------------------------------------------------
| Controlador PasswordController
|--------------------------------------------------------------------------
*/  
class PasswordController extends Controller{
    /*
    |--------------------------------------------------------------------------
    | # Componente ResetsPasswords crea una nueva instancia al controlador para 
    |   un nuevo password.
    |--------------------------------------------------------------------------
    */    
    use ResetsPasswords;
    /*
    |--------------------------------------------------------------------------
    | Componente constructor
    |--------------------------------------------------------------------------
    | # Crea una nueva instancia a middleware que verifica los permisos del usuario
    |   en auth.
    */ 
        public function __construct(){
            $this->middleware('guest');
        }
}