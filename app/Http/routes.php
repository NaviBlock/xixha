<?php

Route::get('/', function(){
    return view('auth/login');
});

/*Index*/
Route::get('/home','ProveedorController@index');
Route::get('/','ProveedorController@index');
Route::get('/index','ProveedorController@index');


/*Direccion a proveedor*/
Route::resource('compras/proveedor','ProveedorController');

/*Configuracion*/
Route::resource('/seguridad/usuario','UsuarioController');
Route::get('/seguridad/usuario','UsuarioController@index');

/*Seguridad*/
Route::auth();
Route::get('/home','HomeController@index');

/*Usuario*/
/*Route::resource('configuracion/usuario','UsuarioController');*/
/*
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