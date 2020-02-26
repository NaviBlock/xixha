<?php
/*
|--------------------------------------------------------------------------
| Modelo Referencia
|--------------------------------------------------------------------------
*/
    namespace xixha;
    use Illuminate\Database\Eloquent\Model;
    /*
    |--------------------------------------------------------------------------
    | Modelo Referencia
    |--------------------------------------------------------------------------
    | Invoca los datos de la tabla Referencia de la DB,
    */
    class Referencia extends Model{
        protected $table = 'referencia';
        protected $primaryKey ='id_ref';    
        public $timestamps = false;    
        protected $fillable = [
            'id_apicultor',        
            'fecha_na',
            'sexo',
            'curp',
            'rfc'
        ];       
        protected $guarded = [       
        ];
    } 