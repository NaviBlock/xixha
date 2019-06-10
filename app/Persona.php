<?php

namespace xixha;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = 'persona';

    protected $primaryKey ='idpersona';
 
    public $timestamps = false;

    protected $fillable = [
       /* 'tipo_persona',
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
    ]; */
        'folio',
        'tipo_persona',
        'nombre',
        'apellidopa',
        'apellidoma',
        'curp',
        'recibo',
        'estado',
        'direccion',
        'telefono',
        'email',
        'upp',
        'pgn',
        'clave_rast',
        'num_colmena',
        'prod_anual',
        'certificacion',
        'temp_cosecha',
        'loc_api',
        'mov_api',
        'observacion'
    ]; 
 
    protected $guarded = [       
    ];
} 