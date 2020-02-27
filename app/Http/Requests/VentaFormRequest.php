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
    | Componente VentaFormRequest
    |--------------------------------------------------------------------------
    | En cada items se aplica un regla de comportamiento o limite solo si el usuario 
    | tiene permiso
    */
        class VentaFormRequest extends Request{
            public function authorize(){
                return true;
            }
        //Reglas
        public function rules(){
            return [
                'idcliente'=>'required',
                'tipo_comprobante'=>'required|max:20',
                'serie_comprobante'=>'max:7',
                'num_comprobante'=>'required|max:10',
                'idarticulo'=>'required',
                'cantidad'=>'required',
                'precio_venta'=>'required',
                'descuento'=>'required',
                'total_venta'=>'required'
            ];
        }
    }