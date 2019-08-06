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
Route::post('/home','DashboardController@index');

Route::get('/','DashboardController@index');
Route::post('/','DashboardController@index');

Route::get('/index','DashboardController@index');
Route::post('/index','DashboardController@index');

/*users*/
Route::get('users','ApicultorController@index');
Route::post('users','ApicultorController@index');
Route::resource('users','ApicultorController');

/*root*/
Route::get('root/dashboard', 'RootController@dashboard');
Route::get('root/index','RootController@index');
Route::get('root','RootController@index');
Route::get('root/create','RootController@create');
Route::get('root/edit','RootController@edit');
Route::get('root/show','RootController@show');
Route::get('root/destroy','RootController@destroy');
Route::resource('root','RootController');

/*secs*/
Route::resource('secs','UsuarioController');
Route::get('secs', 'UsuarioController@index');

/*administrador*/
//Route::resource('administradors','AdminController');
//Route::get('administradors', 'AdminController@index');


Route::group(['middleware' => 'admin'], function () {
    Route::get('administradors', 'AdminController@index');  
    Route::resource('administradors', 'AdminController');    
});

/*supervisor*/
Route::resource('supervisors','SuperController');
Route::get('supervisors', 'SuperController@index');