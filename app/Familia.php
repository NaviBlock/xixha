<?php

namespace xixha;

use Illuminate\Database\Eloquent\Model;

class Familia extends Model
{
    protected $table = 'familia';

    protected $primaryKey ='id_familia';
 
    public $timestamps = false;
  
    protected $fillable = [
        'id_apicultor',        
        'nombre',
        'apellido_pa',
        'apellido_ma',
        'parentesco',
        'curp',
        'rfc's
    ];   
 
    protected $guarded = [       
    ];
} 