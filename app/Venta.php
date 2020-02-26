<?php
/*
|--------------------------------------------------------------------------
| Modelo Venta
|--------------------------------------------------------------------------
*/
    namespace xixha;
    use Illuminate\Database\Eloquent\Model;
    /*
    |--------------------------------------------------------------------------
    |Modelo Venta
    |--------------------------------------------------------------------------
    | Invoca los datos de la tabla Venta de la DB,
    */
        class Venta extends Model{
            protected $table = 'venta';
            protected $primaryKey ='idventa';
            public $timestamps = false; 
            protected $fillable = [
                'idcliente',
                'tipo_comprobante',
                'serie_comprobante',
                'num_comprobante',
                'fecha_hora',
                'impuesto',
                'total_venta',
                'estado'
            ];
            protected $guarded=[
            ];
        }