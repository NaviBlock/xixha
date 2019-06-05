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
    	'direccion',
    	'telefono',
        'email',
        'recibo',
        'prod_anual',
        'upp',
        'pgn',
        'clave_rast',
        'num_colmena',
        'estado',
        'tipo_certificacion',
        'img_perfil',
        'img_curp',   
        'img_pgn',
        'img_upp',
        'img_clave_rast',
        'curp',
        'folio',
        'img_clave_rast',
    ]; 
    
    protected $guarded = [       
    ];
} 