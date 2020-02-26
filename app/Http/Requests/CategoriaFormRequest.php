<?php
/*
|--------------------------------------------------------------------------
| Componente a librerias
|--------------------------------------------------------------------------| 
*/
    namespace xixha\Http\Requests;
    use Illuminate\Foundation\Http\FormRequest;
    /*
    |--------------------------------------------------------------------------
    | Componente CategoriaFormRequest
    |--------------------------------------------------------------------------
    | Aplica en cada items regla de comportamiento
    | o limite solo si esta el usuario autentificado
    */
        class CategoriaFormRequest extends FormRequest{
            public function authorize(){
                return true;
            }
        public function rules(){
            return [
                'nombre'=>'required|max:50',
                'descripcion'=>'max:250',
            ];
        }
    }