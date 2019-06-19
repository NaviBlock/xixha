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
        'apellidopa',
        'apellidoma',
        'curp',
        'estado',
        'telefono',
        'email',
        'upp',
        'pgn',
        'clave_rast',
        'num_colmena',
        'prod_anual',
        'certificacion',
        'fecha_hora',
        'sexo',
        'rfc',
        'estadoP',
        'municipio',
        'calle',
        'colonia',
        'temp_cosecha',
        'loc_api',
        'mov_col',
        'donde',
        'observacion',
        'folio',
        'img_perfil'
    ];   
 
    protected $guarded = [       
    ];
} 