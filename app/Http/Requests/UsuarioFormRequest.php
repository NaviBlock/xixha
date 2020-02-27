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
    | En cada items se aplica un regla de comportamiento o limite solo si el usuario 
    | tiene permiso
    */
        class UsuarioFormRequest extends Request{
            public function authorize(){
                return true;
            }
        //Reglas
        public function rules(){
            return [
                'name' => 'max:255',
                'email' => 'email|max:255|unique:users',
                'password' => 'min:6|confirmed',
            ];
        }
    }