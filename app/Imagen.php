<?php
/*
|--------------------------------------------------------------------------
| Modelo Imagen
|--------------------------------------------------------------------------
*/
    namespace xixha;
    use Illuminate\Database\Eloquent\Model;
    /*
    |--------------------------------------------------------------------------
    | Modelo Imagen
    |--------------------------------------------------------------------------
    | Invoca los datos de la tabla Imagen de la DB,     
    */
        class Imagen extends Model{
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