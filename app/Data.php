<?php
/*
|--------------------------------------------------------------------------
| Modelo Data
|--------------------------------------------------------------------------
*/
    namespace xixha;
    use Illuminate\Database\Eloquent\Model;
    /*
    |--------------------------------------------------------------------------
    | Modelo Data
    |--------------------------------------------------------------------------
    | Invoca los datos de la tabla Data de la DB,     
    */
        class Data extends Model{
            protected $table = 'data';
            protected $primaryKey ='id_data'; 
            public $timestamps = false;  
            protected $fillable = [
                'cp',        
                'calle',
                'estado',
                'colonia',
                'municipio'        
            ];   
            protected $guarded = [       
            ];
        }