<?php
/*
|--------------------------------------------------------------------------
| Modelo Ingreso
|--------------------------------------------------------------------------
*/
    namespace xixha;
    use Illuminate\Database\Eloquent\Model;
    /*
    |--------------------------------------------------------------------------
    | Modelo Ingreso
    |--------------------------------------------------------------------------
    | Invoca los datos de la tabla Ingreso de la DB,     
    */
        class Ingreso extends Model{
            protected $table = 'ingreso';
            protected $primaryKey ='idingreso';
            public $timestamps = false; 
            protected $fillable = [
                'idproveedor',
                'tipo_comprobante',
                'serie_comprobante',
                'num_comprobante',
                'fecha_hora',
                'impuesto',
                'estado'
            ]; 
            protected $guarded=[
            ]; 
        }