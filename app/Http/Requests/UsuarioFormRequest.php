<?php
/*
|--------------------------------------------------------------------------
| Componente a librerias
|--------------------------------------------------------------------------| 
*/
    namespace xixha\Http\Requests;
    use xixha\Http\Requests\Request;
    /*
    |--------------------------------------------------------------------------
    | Componente UsuarioFormRequest
    |--------------------------------------------------------------------------
    | Aplica en cada items regla de comportamiento
    | o limite solo si esta el usuario autentificado
    */
        class UsuarioFormRequest extends Request{
            public function authorize(){
                return true;
            }
        public function rules(){
            return [
                'name' => 'max:255',
                'email' => 'email|max:255|unique:users',
                'password' => 'min:6|confirmed',
            ];
        }
    }