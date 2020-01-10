<?php

namespace xixha;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    protected $table = 'story';

    protected $primaryKey ='id_story';
 
    public $timestamps = false;
  
    protected $fillable = [
        'fechaRegistro',
        'cantidad'
    ];   
    
    protected $guarded = [       
    ];
} 