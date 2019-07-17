<?php
Route::auth();
Route::get('/',function(){
    return view('/layouts/index');
});
/*layouts/index*/

Route::resource('compras/proveedor','ProveedorController');
/*Route::get('compras/proveedor','ProveedorController@show.bank');*/
/*Route::get('/','ProveedorController@index');

/*Route::get('/home','ProveedorController@index');
Route::get('/','ProveedorController@index');*/

/*Route::resource('almacen/categoria','CategoriaController');
Route::resource('almacen/articulo','ArticuloController');
Route::resource('ventas/cliente','ClienteController');
Route::resource('ventas/venta','VentaController'); */
/*Route::resource('compras/ingreso','IngresoController');
Route::resource('seguridad/usuario','UsuarioController');*/
/*Route::auth();
Route::get('/home','HomeController@index');
Route::get('/{slug?}', 'HomeController@index');*/