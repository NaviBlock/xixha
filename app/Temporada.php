<?php
/*
|--------------------------------------------------------------------------
| Modelo Temporada
|--------------------------------------------------------------------------
*/
    namespace xixha;
    use Illuminate\Database\Eloquent\Model;
    /*
    |--------------------------------------------------------------------------
    | Modelo Temporada
    |--------------------------------------------------------------------------
    | Invoca los datos de la tabla Temporada de la DB,     
    */
        class Temporada extends Model{
            protected $table = 'temporada';
            protected $primaryKey ='id_temporada'; 
            public $timestamps = false;  
            protected $fillable = [
                'id_apicultor',        
                'id_api',
                'id_apiario',
                'tipo_temporada',
                'color',
                'tipo_floracion',
                'clima',
                'temperatura',
                'observaciones',
                'mov'
            ];    
            protected $guarded = [       
            ];
        } 