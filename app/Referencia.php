<?php

namespace xixha;

use Illuminate\Database\Eloquent\Model;

class Referencia extends Model
{
    protected $table = 'referencia';

    protected $primaryKey ='id_ref';
 
    public $timestamps = false;
  
    protected $fillable = [
        'id_apicultor',        
        'fecha_na',
        'sexo',
        'curp',
        'rfc'
    ];   
 
    protected $guarded = [       
    ];
} 