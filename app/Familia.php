<?php
/*
|--------------------------------------------------------------------------
| Modelo Familia
|--------------------------------------------------------------------------
*/
    namespace xixha;
    use Illuminate\Database\Eloquent\Model;
    /*
    |--------------------------------------------------------------------------
    | Modelo Familia
    |--------------------------------------------------------------------------
    | Invoca los datos de la tabla Familia de la DB,     
    */
        class Familia extends Model{
            protected $table = 'familia';
            protected $primaryKey ='id_familia';
            public $timestamps = false;  
            protected $fillable = [
                'id_apicultor',        
                'nombre',
                'apellido_pa',
                'apellido_ma',
                'parentesco',
                'curp',
                'rfc'
            ];    
            protected $guarded = [       
            ];
        } 