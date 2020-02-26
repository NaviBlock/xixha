<?php
/*
|--------------------------------------------------------------------------
| Modelo DetalleIngreso
|--------------------------------------------------------------------------
*/
    namespace xixha;
    use Illuminate\Database\Eloquent\Model;
    /*
    |--------------------------------------------------------------------------
    | Modelo DetalleIngreso
    |--------------------------------------------------------------------------
    | Invoca los datos de la tabla DetalleIngreso de la DB,     
    */
        class DetalleIngreso extends Model{
            protected $table = 'detalle_ingreso';
            protected $primaryKey ='iddetalle_ingreso';
            public $timestamps = false;
            protected $fillable = [
                'idingreso',
                'idarticulo',
                'cantidad',
                'precio_compra',
                'precio_venta'
            ];
            protected $guarded=[
            ];
        } 