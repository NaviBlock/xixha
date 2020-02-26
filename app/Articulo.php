<?php
/*
|--------------------------------------------------------------------------
| Modelo Articulo
|--------------------------------------------------------------------------
*/
	namespace xixha;
	use Illuminate\Database\Eloquent\Model;
    /*
    |--------------------------------------------------------------------------
    | Modelo Articulo
    |--------------------------------------------------------------------------
    | Invoca los datos de la tabla Articulo de la DB,     
    */ 
		class Articulo extends Model{ 
			protected $table = 'articulo';
			protected $primaryKey ='idarticulo';
			public $timestamps = false;
			protected $fillable = [
				'idcategoria',
				'codigo',
				'nombre',
				'stock',
				'descripcion',
				'imagen',
				'estado'
			];	
			protected $guarded=[
			];
		}