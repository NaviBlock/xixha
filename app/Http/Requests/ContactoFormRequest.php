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
    | En cada items se aplica un regla de comportamiento o limite solo si el usuario 
    | tiene permiso
    */
        class ContactoFormRequest extends Request{
            public function authorize(){
                return true;
            }
        //Reglas
        public function rules(){
            return [
                'direccion'=>'max:200',
                'telefono'=>'max:10'
            ];
        }
    }