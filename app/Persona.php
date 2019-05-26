<?php

namespace xixha;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = 'persona';

    protected $primaryKey ='idpersona';

    public $timestamps = false;

    protected $fillable = [
    	'tipo_persona',
    	'nombre',
    	'tipo_documento',
    	'num_documento',
    	'direccion',
    	'telefono',
        'email',
        'num_colmena',
        'geoloc_apiario',
        'prod_anual',
        'temp_cosecha',
        'tipo_certifcacion',
        'mueve_sus_colmena',
        'a_donde',
        'observaciones',
        'upp',
        'pgn',
        'clave_rast',
    ]; 
    protected $guarded = [       
    ];
} 