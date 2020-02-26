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
    | Componente ApicultorFormRequest
    |--------------------------------------------------------------------------
    | Aplica en cada items regla de comportamiento
    | o limite solo si esta el usuario autentificado
    */
        class ApicultorFormRequest extends Request{
            public function authorize(){
                return true;
            }
        public function rules(){
            return [
                'loc_api'=>'max:256',
                'mov_api'=>'max:256',
                'observacion'=>'max:256'
            ];
        }
    }