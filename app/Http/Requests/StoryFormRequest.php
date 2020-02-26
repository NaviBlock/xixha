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
    | Componente StoryFormRequest
    |--------------------------------------------------------------------------
    | Aplica en cada items regla de comportamiento
    | o limite solo si esta el usuario autentificado
    */
        class StoryFormRequest extends Request{
            public function authorize(){
                return true;
            } 
        public function rules(){
            return [
                'cantidad'=>'required'            
            ];
        }
    }