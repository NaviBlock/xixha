<?php
/*
|--------------------------------------------------------------------------
| Componente a librerias
|--------------------------------------------------------------------------| 
*/
namespace xixha\Http\Controllers\Auth;
use xixha\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
class PasswordController extends Controller{
    use ResetsPasswords;
    /*
    |--------------------------------------------------------------------------
    | Componente nuevo password
    |--------------------------------------------------------------------------
    | Crea una nueva instancia al controlador password
    | 
    */     
        public function __construct(){
            $this->middleware('guest');
        }
}