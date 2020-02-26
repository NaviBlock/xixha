<?php
/*
|--------------------------------------------------------------------------
| Modelo Gpsapiario
|--------------------------------------------------------------------------
*/
namespace xixha;
use Illuminate\Database\Eloquent\Model;
    /*
    |--------------------------------------------------------------------------
    | Modelo Gpsapiario
    |--------------------------------------------------------------------------
    | Invoca los datos de la tabla Gpsapiario de la DB,     
    */
        class Gpsapiario extends Model{
            protected $table = 'gps_apiario';
            protected $primaryKey ='id_apiario';
            public $timestamps = false;
            protected $fillable = [
                'id_apicultor',        
                'pgs_data'
            ];           
            protected $guarded = [       
            ];
        } 