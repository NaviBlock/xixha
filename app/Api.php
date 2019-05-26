<?php

namespace xixha;

use Illuminate\Database\Eloquent\Model;

class Api extends Model
{
    protected $table = 'apicultor';

    protected $primaryKey ='idapicultor';

    public $timestamps = false;

    protected $fillable = [
    	'num_colmena',
    	'geoloc_apiario',
    	'prod_anual',
    	'temp_cosecha',
    	'tipo_certificacion',
        'mueve_sus_colmena',
        'a_donde',
        'observaciones',
        'upp',
        'pgn',
        'clave_rast',
        'estado'
    ];

    protected $guarded = [       
    ];
}
