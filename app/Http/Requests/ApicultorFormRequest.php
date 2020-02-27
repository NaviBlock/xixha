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
    | En cada items se aplica un regla de comportamiento o limite solo si el usuario 
    | tiene permiso
    */    
        class ApicultorFormRequest extends Request{
            public function authorize(){
                return true;
            }
        //Reglas
        public function rules(){
            return [
                'loc_api'=>'max:256',
                'mov_api'=>'max:256',
                'observacion'=>'max:256'
            ];
        }
    }