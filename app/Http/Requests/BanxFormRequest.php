<?php

namespace xixha\Http\Requests;
 
use xixha\Http\Requests\Request;

class BanxFormRequest extends Request
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nombre'=>'max:255',
            'apellidopa'=>'max:255',
            'apellidoma'=>'max:255',
            'name' => 'max:255',
            'email' => 'email|max:255|unique:users',
            'clave' => 'min:18|max:18|confirmed',
            'nombanco'=>'max:255'
        ];
    }
}
