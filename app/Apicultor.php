<?php
/*
|--------------------------------------------------------------------------
| Modelo Apicultor
|--------------------------------------------------------------------------
*/
    namespace xixha;
    use Illuminate\Database\Eloquent\Model;
    /*
    |--------------------------------------------------------------------------
    | Modelo Apicultor
    |--------------------------------------------------------------------------
    | Invoca los datos de la tabla Apicultor de la DB,     
    */
        class Apicultor extends Model{
            protected $table = 'apiarios';
            protected $primaryKey ='idapiarios';
            public $timestamps = false;
            protected $fillable = [
                //'upp',
                //'pgn',
                //'clave_rast',
                //'num_colmena',
                //'prod_anual',
                //'certificacion',
                //'estado'
                'idnum',
                'loc_api',
                'mov_api',
                'observacion',
                'estado'
            ]; 
            protected $guarded = [       
            ];
        }