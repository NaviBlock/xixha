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
        'folio',
        'nombre',
    	'direccion',
    	'telefono',
        'email',
        'curp',
        'img_curp',
        'recibo',
        'tipo_certificacion',
        'prod_anual',
        'upp',
        'img_upp',
        'pgn',
        'img_pgn',
        'clave_rast',
        'img_clave_rast',
        'estado',
        'img_perfil',
    ]; 
    
    protected $guarded = [       
    ];
} 