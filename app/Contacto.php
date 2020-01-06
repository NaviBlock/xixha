<?php

namespace xixha;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    protected $table = 'contacto';

    protected $primaryKey ='idcontacto';

    public $timestamps = false;

    protected $fillable = [
        'direccion',
        'telefono',
        'email',
        'estado'
    ]; 
    
    protected $guarded = [       
    ];
}
