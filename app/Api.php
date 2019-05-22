<?php

namespace xixha;

use Illuminate\Database\Eloquent\Model;

class Api extends Model
{
    protected $table = 'apicultor';

    protected $primaryKey ='idapicultor';

    public $timestamps = false;

    protected $fillable = [
    	'idpersona',
    	'num_colmena',
    	'geoloc_apiario',
    	'prod_anual',
    	'direccion',
    	'telefono',
    	'email'
    ];

    protected $guarded = [       
    ];
}
