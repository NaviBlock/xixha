<?php

namespace xixha;

use Illuminate\Database\Eloquent\Model;

class Banx extends Model
{
    protected $table = 'banx';

    protected $primaryKey ='idop';
 
    public $timestamps = false;
  
    protected $fillable = [     
        'fecha',
        'cantidad',
        'idpersona',
        'nombre',    
        'apellidopa',
        'apellidoma',
        'id',
        'name',
        'rol',
        'clave',
        'nombanco',
        'created_at',
        'last_login',
        'token'
    ];   
 
    protected $guarded = [       
    ];
} 