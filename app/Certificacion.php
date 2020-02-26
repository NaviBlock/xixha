<?php
/*
|--------------------------------------------------------------------------
| Modelo Certificacion
|--------------------------------------------------------------------------
*/
    namespace xixha;
    use Illuminate\Database\Eloquent\Model;
    /*
    |--------------------------------------------------------------------------
    | Modelo Certificacion
    |--------------------------------------------------------------------------
    | Invoca los datos de la tabla Certificacion de la DB,     
    */
        class Certificacion extends Model{
            protected $table = 'certificacion';
            protected $primaryKey ='id_certificacion'; 
            public $timestamps = false;  
            protected $fillable = [
                'id_apicultor',        
                'certificadora',
                'certificado',
                'certificadodigital'
            ];    
            protected $guarded = [       
            ];
        } 