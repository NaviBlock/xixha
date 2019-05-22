<?php

namespace xixha\Http\Requests;

use xixha\Http\Requests\Request;

class ApiFormRequest extends Request
{
    public function authorize()
    {
        return true;
    } 
 
    public function rules()
    {
        return [
            'idpersona'=>'required',
            'num_colmena'=>'required',
            'geoloc_apiario'=>'required|max:256',
            'prod_anual'=>'required|max:256',
            'temp_cosecha'=>'required|max:256',
            'tipo_certificacion'=>'required|max:256',
            'mueve_sus_colmena'=>'required|max:100',
            'a_donde'=>'required|max:256',
            'observaciones'=>'required|max:256',
            'upp'=>'required|max:100',
            'pgn'=>'required|max:100',
            'clave_rast'=>'required|max:100'
        ];
    }
}
