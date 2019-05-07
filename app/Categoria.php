<?php

namespace xixha;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categoria';
    protected $primaryKey = 'idcategoria';

    public $timestamps = true;

    protected $fillable = [
        'nombre',
        'descrpcion',
        'condicion'
    ];

    protected $guarded = [

    ];
}
