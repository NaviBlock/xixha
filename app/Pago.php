<?php

namespace xixha;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    protected $table = 'pago';

    protected $primaryKey ='id_pago';
 
    public $timestamps = false;
  
    protected $fillable = [
        'id_apicultor',        
        'clave',
        'no_cuenta',
        'banco',
        'nombre_cuenta',
        'token',
        'fecha'
    ];   
 
    protected $guarded = [       
    ];
} 