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
    | Componente ArticuloFormRequest
    |--------------------------------------------------------------------------
    | Aplica en cada items regla de comportamiento
    | o limite solo si esta el usuario autentificado
    */
        class ArticuloFormRequest extends FormRequest{ 
            public function authorize(){
                return true;
            }
            public function rules(){
                return [
                'idcategoria'=>'',
                'codigo'=>'required|max:50',
                'nombre'=>'required|max:100',
                'stock'=>'required|numeric',
                'descripcion'=>'max:250',
                'imagen'=>'mimes:jpeg,jpg,bmp,png',
                ];
            }
        }