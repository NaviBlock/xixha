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
        'apellidopa',
        'apellidoma',
        'nombre',
        'curp',
        'fecha_na',
        'sexo',
        'estadoP',
        'curp',
        'rfc',
        'n_int_fam',
        'calle',
        'colonia',
        'municipio',
        'telefono',
        'email',
        'num_colmena',
        'loc_colmena',
        'loc_api',
        'prod_anual',
        'kilo_actual',
        'temp_cosecha',
        'upp',
        'pgn',
        'clave_rast',
        'certificacion',
        'fecha_hora',
        'mov_col',
        'donde',
        'observacion',
        'folio',
        'img_perfil',
        'estado',
        'nCuenta',
        'clave',
        'banco',
        'opCantidad',
        'opPrecio',
        'opFecha',
        'opTotal',
        'fechaRegistro',
        'cantidad'
    ];   
 
    protected $guarded = [       
    ];
} 