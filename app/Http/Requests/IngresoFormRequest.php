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
    | Componente IngresoFormRequest
    |--------------------------------------------------------------------------
    | En cada items se aplica un regla de comportamiento o limite solo si el usuario 
    | tiene permiso
    */
        class IngresoFormRequest extends Request{
            public function authorize() 
            {
                return true;
            }
            //Reglas
            public function rules()
            {
                return [
                    'idproveedor'=>'required',
                    'tipo_comprobante'=>'required|max:20',
                    'serie_comprobante'=>'max:7',
                    'num_comprobante'=>'required',
                    'idarticulo'=>'required',
                    'cantidad'=>'required',
                    'precio_compra'=>'required',
                    'precio_venta'=>'required'
                ];
            }
        }