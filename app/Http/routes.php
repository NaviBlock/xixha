<?php
Route::get('/', function () {
   //return view('auth/login');
   return view('login');
});

Route::auth();

/** Ruta Api_token*/
Route::group(['middleware' => ['auth:api']], function(){
    Route::get('token',function(){
        $user = \Auth::user();
        return $user;
    });
});

//Index Dashboard
Route::get('/home','DashboardController@index');
Route::get('/','DashboardController@index');
Route::get('/index','DashboardController@index');

/*Direccion a users*/
Route::resource('users','ApicultorController');
Route::get('users','ApicultorController@index');

/*Direccion a root*/
Route::resource('root','RootController');
Route::get('root', 'RootController@index');
Route::get('secs', 'UsuarioController@index');
Route::resource('secs','UsuarioController');

/*Direccion a supervisor*/
Route::resource('supervisors','ProveedorController');
Route::get('supervisors', 'SuperController@index');

/*Direccion a moderadors*/
Route::resource('moderadors','ProveedorController');
Route::get('moderadors', 'ModerController@index');

/*Direccion a administrador*/
Route::resource('administradors','ProveedorController');
Route::get('administradors', 'AdminController@index');

/*Configuracion*/
Route::resource('/seguridad/usuario','UsuarioController');
Route::get('/seguridad/usuario','UsuarioController@index');

//Route::resource('proveedor','ProveedorController');
/*Route::resource('configuracion/usuario','UsuarioController');*/
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