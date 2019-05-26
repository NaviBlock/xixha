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
            'clave_rast'=>'max:100'
        ]; 
    }
}