<?php

namespace xixha;

use Illuminate\Database\Eloquent\Model;

class Operacion extends Model
{
    protected $table = 'operacion';

    protected $primaryKey ='id_operacion';
 
    public $timestamps = false;
  
    protected $fillable = [
        'id_apicultor',        
        'cantidad',
        'precio',
        'total',
        'fecha'
    ];   
 
    protected $guarded = [       
    ];
} 