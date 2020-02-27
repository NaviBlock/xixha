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
    | En cada items se aplica un regla de comportamiento o limite solo si el usuario 
    | tiene permiso
    */
        class CategoriaFormRequest extends FormRequest{
            public function authorize(){
                return true;
            }
        //Reglas
        public function rules(){
            return [
                'nombre'=>'required|max:50',
                'descripcion'=>'max:250',
            ];
        }
    }