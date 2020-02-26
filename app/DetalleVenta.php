<?php
/*
|--------------------------------------------------------------------------
| Modelo DetalleVenta
|--------------------------------------------------------------------------
*/
namespace xixha;
use Illuminate\Database\Eloquent\Model;
    /*
    |--------------------------------------------------------------------------
    | Modelo DetalleVenta
    |--------------------------------------------------------------------------
    | Invoca los datos de la tabla Contacto de la DB,     
    */
        class DetalleVenta extends Model{
            protected $table = 'detalle_venta';
            protected $primaryKey ='iddetalle_venta';
            public $timestamps = false; 
            protected $fillable = [
                'idventa',
                'idarticulo',
                'cantidad',
                'precio_venta',
                'descuento'
            ];
            protected $guarded=[
            ];
        }  