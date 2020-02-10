<?php

namespace xixha;

use Illuminate\Database\Eloquent\Model;

class Banx extends Model
{
    protected $table = 'pago';

    protected $primaryKey ='id_pago';
 
    public $timestamps = false;
  
    protected $fillable = [     
        'id_apicultor',
        'folio',
        'clave',
        'no_cuenta',    
        'banco',
        'name_user',
        'token',
        'fecha'
    ];   
     
    protected $guarded = [       
    ];
} 