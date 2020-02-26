<?php
/*
|--------------------------------------------------------------------------
| Modelo Apiweb
|--------------------------------------------------------------------------
*/
    namespace xixha;
    use Illuminate\Database\Eloquent\Model;
    /*
    |--------------------------------------------------------------------------
    | Modelo Apiweb
    |--------------------------------------------------------------------------
    | Invoca los datos de la tabla Apiweb de la DB,     
    */
        class Apiweb extends Model{
            protected $table = 'apiweb';
            protected $primaryKey ='id_apiweb'; 
            public $timestamps = false;  
            protected $fillable = [
                'id_apicultor',        
                'telefono',
                'email',
                'facebook',
                'instagram',
                'twitter'
            ];   
            protected $guarded = [       
            ];
        }