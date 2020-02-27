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
    | Componente BanxFormRequest
    |--------------------------------------------------------------------------
    | En cada items se aplica un regla de comportamiento o limite solo si el usuario 
    | tiene permiso
    */
        class BanxFormRequest extends Request{
            public function authorize(){
                return true;
            } 
        //Reglas
        public function rules(){
            return [
                /*'folio' => 'min:20|max:255|unique',
                'clave' => 'min:18|max:30|unique',
                'no_cuenta'=> 'min:10|max:30|unique',            
                'banco'=>'min:3|max:50',
                'name_user' => 'min:10|max:50'*/
            ];
        }
    }