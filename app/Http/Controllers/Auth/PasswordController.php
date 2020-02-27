<?php
/*
|--------------------------------------------------------------------------
| Componente a librerias
|--------------------------------------------------------------------------| 
*/
namespace xixha\Http\Controllers\Auth;
use xixha\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
/*
|--------------------------------------------------------------------------
| Controlador PasswordController
|--------------------------------------------------------------------------| 
*/  
class PasswordController extends Controller{
    use ResetsPasswords;
    /*
    |--------------------------------------------------------------------------
    | Componente nuevo password
    |--------------------------------------------------------------------------
    | Crea una nueva instancia al controlador PasswordController
    | 
    */     
        public function __construct(){
            $this->middleware('guest');
        }
}