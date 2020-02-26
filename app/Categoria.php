<?php
/*
|--------------------------------------------------------------------------
| Modelo Categoria
|--------------------------------------------------------------------------
*/
namespace xixha;
use Illuminate\Database\Eloquent\Model;
    /*
    |--------------------------------------------------------------------------
    | Modelo Categoria
    |--------------------------------------------------------------------------
    | Invoca los datos de la tabla Categoria de la DB,     
    */
        class Categoria extends Model{
            protected $table = 'categoria';
            protected $primaryKey = 'idcategoria';
            public $timestamps = false;
            protected $fillable = [
                'nombre',
                'descripcion',
                'estado'
            ];
            protected $guarded = [
            ];
        }