<?php

namespace xixha;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    protected $table = 'story';

    protected $primaryKey ='id_story';
 
    public $timestamps = false;
  
    protected $fillable = [
        'id_ref',
        'fechaRegistro',
        'cantidad'
    ];   
    
    protected $guarded = [       
    ];
} 