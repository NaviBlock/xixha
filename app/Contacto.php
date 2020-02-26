<?php
/*
|--------------------------------------------------------------------------
| Modelo Contacto
|--------------------------------------------------------------------------
*/
    namespace xixha;
    use Illuminate\Database\Eloquent\Model;
    /*
    |--------------------------------------------------------------------------
    | Modelo Contacto
    |--------------------------------------------------------------------------
    | Invoca los datos de la tabla Contacto de la DB,     
    */
        class Contacto extends Model{
            protected $table = 'contacto';
            protected $primaryKey ='idcontacto';
            public $timestamps = false;
            protected $fillable = [
                'direccion',
                'telefono',
                'email',
                'estado'
            ];     
            protected $guarded = [       
            ];
        }