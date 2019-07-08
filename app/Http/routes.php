<?php

Route::get('/', function () {
    return view('layouts/index'); 
});

/*Route::resource('almacen/categoria','CategoriaController');
Route::resource('almacen/articulo','ArticuloController');

Route::resource('ventas/cliente','ClienteController');
Route::resource('ventas/venta','VentaController'); */

Route::auth();
Route::get('/home','ProveedorController@index');
Route::get('layouts/index','ProveedorController@index');
Route::resource('compras/proveedor','ProveedorController');

/*Route::resource('compras/ingreso','IngresoController');

Route::resource('seguridad/usuario','UsuarioController');*/

/*Route::auth();
Route::get('/home','HomeController@index');
Route::get('/{slug?}', 'HomeController@index');*/
