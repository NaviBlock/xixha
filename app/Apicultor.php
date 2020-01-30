<?php

namespace xixha;

use Illuminate\Database\Eloquent\Model;

class Apicultor extends Model
{
    protected $table = 'apicultor';

    protected $primaryKey ='id_apicultor';

    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'apellido_pa',
        'apellido_ma',
    ]; 
    
    protected $guarded = [       
    ];
}
