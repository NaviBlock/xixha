<?php

namespace xixha;

use Illuminate\Database\Eloquent\Model;

class Datapi extends Model
{
    protected $table = 'datapi';

    protected $primaryKey ='id_datapi';
 
    public $timestamps = false;
  
    protected $fillable = [
        'id_apicultor',        
        'id_certificacion',
        'upp',
        'pgn',
        'clave_rast'
    ];   
 
    protected $guarded = [       
    ];
} 