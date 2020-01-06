<?php

namespace xixha\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticuloFormRequest extends FormRequest
{ 
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
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
