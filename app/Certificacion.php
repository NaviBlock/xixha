<?php

namespace xixha;

use Illuminate\Database\Eloquent\Model;

class Certificacion extends Model
{
    protected $table = 'certificacion';

    protected $primaryKey ='id_certificacion';
 
    public $timestamps = false;
  
    protected $fillable = [
        'id_apicultor',        
        'certificadora',
        'certificado',
        'certificadodigital'
    ];   
 
    protected $guarded = [       
    ];
} 