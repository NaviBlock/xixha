<?php
Route::get('/', function () {
   return view('auth/login');
   //return view('login');
});

Route::auth();

/** Ruta Api_token*/
/*Route::group(['middleware' => ['auth:api']], function(){
    Route::get('token',function(){
        $user = \Auth::user();
        return $user;
    });
});*/
  
//Users
Route::group(['middleware' => 'user'], function(){
    //Index Dashboard   
    //Route::get('','ApicultorController@index');
    Route::get('/','ApicultorController@index');
    Route::get('/index','ApicultorController@index');
    Route::get('/home','ApicultorController@index');
    Route::get('users','ApicultorController@index');
    Route::get('users/index','ApicultorController@index');
    //users
    Route::get('users/padron','ApicultorController@padron');
    Route::get('users/search','ApicultorController@search');
    Route::get('users/show','ApicultorController@show');
    //Resource
    Route::resource('users','ApicultorController');
});

//Super
Route::group(['middleware' => 'super'], function(){
    //index Super
    Route::get('supervisors', 'SuperController@index');
    Route::get('supervisors/index','SuperController@index');    
    Route::get('supervisors/home','SuperController@index');    
    //Super
    Route::get('supervisors/padron', 'SuperController@padron');
    Route::get('supervisors/search', 'SuperController@search');
    Route::get('supervisors/show','SuperController@show');
    //Resource
   Route::resource('supervisors','SuperController');
});

//Admin
Route::group(['middleware' => 'admin'], function () {
    //Index Admin
    //Route::get('', 'AdminController@index');
    Route::get('administradors', 'AdminController@index');
    Route::get('administradors/index', 'AdminController@index');
    Route::get('administradors/home', 'AdminController@index');
    //Admin    
    Route::get('administradors/padron','AdminController@padron');
    Route::get('administradors/show','AdminController@show');
    Route::get('administradors/create','AdminController@create');
    Route::get('administradors/search','AdminController@search');
    Route::get('administradors/edit','AdminController@edit');
    //Resource
    Route::resource('administradors','AdminController');
});

//root
Route::group(['middleware' => 'root'], function(){
    //Index root
    //Route::get('','RootController@index');
    Route::get('root','RootController@index');
    Route::get('root/index','RootController@index');
    Route::get('root/home','RootController@index');
    //Root
    Route::get('root/padron','RootController@padron');
    Route::get('root/create','RootController@create');
    Route::get('root/edit','RootController@edit');
    Route::get('root/show','RootController@show');
    Route::get('root/destroy','RootController@destroy');
    Route::get('root/search','RootController@search');  
    Route::get('root/modal','RootController@modal');  
    
    //Resource
    Route::resource('root', 'RootController');

    //Index secs
    Route::get('secs', 'UsuarioController@index');
    Route::get('secs/index', 'UsuarioController@index');
    Route::get('secs/home', 'UsuarioController@index');
    //secs
    Route::get('secs/create','UsuarioController@create');
    Route::get('secs/edit','UsuarioController@edit');
    Route::get('secs/show','UsuarioController@show');
    Route::get('secs/modal','UsuarioController@modal');
    Route::get('secs/destroy','UsuarioController@destroy');
    //Resource
    Route::resource('secs', 'UsuarioController');
});