<?php

namespace xixha;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    protected $table = 'imagen';

    protected $primaryKey ='idimagen';

    public $timestamps = false;

    protected $fillable = [
        'img_perfil',
        'img_upp',
        'img_pgn',
        'img_clave_rast',
        'img_curp',
        'estado'
    ]; 
    
    protected $guarded = [       
    ];
}
