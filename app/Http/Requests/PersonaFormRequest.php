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
            'folio'=>'required',
            'tipo_persona'=>'required',
            'nombre'=>'required|max:256',
            'tipo_documento'=>'required|max:20',
            'num_documento'=>'required|max:15',
            'direccion'=>'max:70',
            'telefono'=>'max:15',
            'email'=>'max:50',
            'num_colmena'=>'max:256',
            'geoloc_apiario'=>'max:256',
            'prod_anual'=>'max:256',
            'temp_cosecha'=>'max:256',
            'tipo_certifcacion'=>'max:256',
            'mueve_sus_colmena'=>'max:256',
            'a_donde'=>'max:256',
            'observaciones'=>'max:256',
            'upp'=>'max:100',
            'pgn'=>'max:100',
            'clave_rast'=>'max:100',
            'estado'=>'max:100',
            'img_perfil'=>'mimes:jpeg,jpg,bmp,png',
            'img_upp'=>'mimes:jpeg,jpg,bmp,png',
            'img_pgn'=>'mimes:jpeg,jpg,bmp,png',
            'img_clave_rast'=>'mimes:jpeg,jpg,bmp,png',
            'img_rfc'=>'mimes:jpeg,jpg,bmp,png',
            'img_curp'=>'mimes:jpeg,jpg,bmp,png',
            'img_ine'=>'mimes:jpeg,jpg,bmp,png'
        ]; 
    }
}