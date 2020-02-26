<?php
/*
|--------------------------------------------------------------------------
| Modelo Api
|--------------------------------------------------------------------------
*/
    namespace xixha;
    use Illuminate\Database\Eloquent\Model;
    /*
    |--------------------------------------------------------------------------
    | Modelo Api
    |--------------------------------------------------------------------------
    | Invoca los datos de la tabla Api de la DB,     
    */
        class Api extends Model{
            protected $table = 'api';
            protected $primaryKey ='id_api'; 
            public $timestamps = false;  
            protected $fillable = [
                'id_apicultor',        
                'no_colmena',
                'prod_anual',
                'prod_mes',
                'kilo_actual',
                'kilo_anterior'
            ];    
            protected $guarded = [       
            ];
        } 