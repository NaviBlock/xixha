<?php

namespace xixha\Http\Requests;

use xixha\Http\Requests\Request;

class PersonaFormRequest extends Request
{
    public function authorize()
    { 
        return true;
    }
 
    public function rules()
    {
        return [ 
            'folio'=>'',
            'nombre'=>'required|max:256',
            'direccion'=>'max:70',
            'telefono'=>'required|max:15',
            'email'=>'max:50',
            'recibo'=>'max:40',
            'tipo_certificacion'=>'max:256',
            'prod_anual'=>'max:256',
            'upp'=>'max:100',
            'pgn'=>'max:100',
            'clave_rast'=>'max:100',
            'estado'=>'max:100',
            'img_perfil'=>'mimes:jpeg,jpg,bmp,png,pdf',
            'img_upp'=>'mimes:jpeg,jpg,bmp,png,pdf',
            'img_pgn'=>'mimes:jpeg,jpg,bmp,png,pdf',
            'img_clave_rast'=>'mimes:jpeg,jpg,bmp,png,pdf',
            'curp'=>'required|max:50',
            'img_curp'=>'mimes:jpeg,jpg,bmp,png,pdf',
            'num_colmena',
            'tipo_persona'

        ]; 
    }
}