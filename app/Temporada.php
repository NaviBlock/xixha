<?php

namespace xixha;

use Illuminate\Database\Eloquent\Model;

class Temporada extends Model
{
    protected $table = 'temporada';

    protected $primaryKey ='id_temporada';
 
    public $timestamps = false;
  
    protected $fillable = [
        'id_apicultor',        
        'id_api',
        'id_apiario',
        'tipo_temporada',
        'color',
        'tipo_floracion',
        'clima',
        'temperatura',
        'observaciones',
        'mov'
    ];   
 
    protected $guarded = [       
    ];
} 