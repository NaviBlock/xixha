<?php

namespace xixha;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    protected $table = 'data';

    protected $primaryKey ='id_data';
 
    public $timestamps = false;
  
    protected $fillable = [
        'cp',        
        'calle',
        'estado',
        'colonia',
        'municipio'        
    ];   
 
    protected $guarded = [       
    ];
} 