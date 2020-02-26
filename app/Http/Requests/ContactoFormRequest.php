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
    | Componente ContactoFormRequest
    |--------------------------------------------------------------------------
    | Aplica en cada items regla de comportamiento
    | o limite solo si esta el usuario autentificado
    */
        class ContactoFormRequest extends Request{
            public function authorize(){
                return true;
            }

        public function rules(){
            return [
                'direccion'=>'max:200',
                'telefono'=>'max:10'
            ];
        }
    }