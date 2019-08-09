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

//Route::get('/admin', ['middleware' => ['auth', 'administrator'],'uses'=>'Controller@adminFunction']);

//Users
Route::group(['middleware' => ['auth','user']], function(){
    //Index Dashboard   
    Route::get('/','ApicultorController@index');
    Route::get('/index','ApicultorController@index');
    Route::get('/home','ApicultorController@index');
    Route::get('users','ApicultorController@index');
    //users
    Route::get('users/padron','ApicultorController@padron');
    //Resource
    Route::resource('users','ApicultorController');
});

//Super
Route::group(['middleware' => ['auth','super']], function(){
    //index Super
    Route::get('supervisors', 'SuperController@index');
    Route::get('supervisors/index','SuperController@index');    
    Route::get('supervisors/home','SuperController@index');    
    //Super
    Route::get('supervisors/padron', 'SuperController@padron');    
    Route::get('supervisors/show','SuperController@show');
    //Resource
    Route::resource('supervisors','SuperController');
});

//Admin
Route::group(['middleware' => ['auth','admin']], function () {
    //Index Admin
    Route::get('administradors', 'AdminController@index');
    Route::get('administradors/index', 'AdminController@index');
    Route::get('administradors/home', 'AdminController@index');
    //Admin    
    Route::get('administradors/padron','AdminController@padron');
    Route::get('administradors/show','AdminController@show');
    Route::get('administradors/create','AdminController@create');
    Route::get('administradors/edit','AdminController@edit');
    //Resource
    Route::resource('administradors','AdminController');
});

//root
Route::group(['middleware' => ['auth','root']], function(){
    //Index root
    Route::get('root','RootController@index');
    Route::get('root/index','RootController@index');
    Route::get('root/home','RootController@index');
    //Root
    Route::get('root/padron','RootController@padron');
    Route::get('root/create','RootController@create');
    Route::get('root/edit','RootController@edit');
    Route::get('root/show','RootController@show');
    Route::get('root/destroy','RootController@destroy');  
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
    Route::get('secs/destroy','UsuarioController@destroy');
    //Resource
    Route::resource('secs', 'UsuarioController');
});