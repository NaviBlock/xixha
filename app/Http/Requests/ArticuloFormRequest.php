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
    | En cada items se aplica un regla de comportamiento o limite solo si el usuario 
    | tiene permiso
    */
        class ArticuloFormRequest extends FormRequest{ 
            public function authorize(){
                return true;
            }
            //Reglas
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