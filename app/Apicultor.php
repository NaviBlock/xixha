<?php

namespace xixha;

use Illuminate\Database\Eloquent\Model;

class Apicultor extends Model
{
    protected $table = 'apicultor';

    protected $primaryKey ='idapicultor';

    public $timestamps = false;

    protected $fillable = [
        'upp',
        'pgn',
        'clave_rast',
        'num_colmena',
        'prod_anual',
        'certificacion',
        'estado'
    ]; 
    
    protected $guarded = [       
    ];
}
