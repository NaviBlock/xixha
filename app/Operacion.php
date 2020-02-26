<?php
/*
|--------------------------------------------------------------------------
| Modelo Operacion
|--------------------------------------------------------------------------
*/
    namespace xixha;
    use Illuminate\Database\Eloquent\Model;
    /*
    |--------------------------------------------------------------------------
    | Modelo Operacion
    |--------------------------------------------------------------------------
    | Invoca los datos de la tabla Operacion de la DB,     
    */
        class Operacion extends Model{
            protected $table = 'operacion';
            protected $primaryKey ='id_operacion'; 
            public $timestamps = false;  
            protected $fillable = [
                'id_apicultor',        
                'cantidad',
                'precio',
                'total',
                'fecha'
            ];    
            protected $guarded = [       
            ];
        } 