<?php
/*
|--------------------------------------------------------------------------
| Modelo Datapi
|--------------------------------------------------------------------------
*/
    namespace xixha;
    use Illuminate\Database\Eloquent\Model;
    /*
    |--------------------------------------------------------------------------
    | Modelo Datapi
    |--------------------------------------------------------------------------
    | Invoca los datos de la tabla Datapi de la DB,     
    */
        class Datapi extends Model{
            protected $table = 'datapi';
            protected $primaryKey ='id_datapi';
            public $timestamps = false;
            protected $fillable = [
                'id_apicultor',        
                'id_certificacion',
                'upp',
                'pgn',
                'clave_rast'
            ];   
            protected $guarded = [       
            ];
        } 