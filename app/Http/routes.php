<?php
Route::get('/', function () {
  return view('auth/login');
   //return view('login');
});

Route::auth();

/* #Función route para el grupo para middleware a user,
    dirección verificada para el user 
    //USER
*/
Route::group(['middleware' => 'user'], function(){
    //Index Dashboard    
    //   
    Route::get('/','ApicultorController@index');
    Route::get('/index','ApicultorController@index');
    Route::get('/home','ApicultorController@index');
    Route::get('users','ApicultorController@index');
    Route::get('users/index','ApicultorController@index');
    //users
    Route::get('padron','ApicultorController@padron');
    Route::get('users/padron','ApicultorController@padron');
    Route::get('users/search','ApicultorController@search');
    //Route::get('users/show','ApicultorController@show');
    Route::get('users/perfil','ApicultorController@perfil');
    //Resource
    Route::resource('users','ApicultorController');
});

/* #Función route para el grupo para middleware a root,
    dirección verificada para el root 
    //ROOT
*/
Route::group(['middleware' => 'root'], function(){
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
    Route::get('root/search','RootController@search');    
    Route::get('root/tablav','RootController@tablav')->name('tablav');
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

    //Story index    
    Route::get('story/','StoryController@index');
    Route::get('story/index','StoryController@index');
    //Story
    Route::get('story/create','StoryController@create');
    Route::get('story/show','StoryController@show');
    Route::get('story/search','StoryController@search');
    Route::get('story/edit','StoryController@edit');
    //Resource
    Route::resource('story', 'StoryController');

    //Banx    
    Route::get('banx','BanxController@index');
    Route::get('banx/index','BanxController@index');
    Route::get('banx/create','BanxController@create');
    Route::get('banx/edit','BanxController@edit');
    Route::get('banx/show','BanxController@show');    
    Route::get('banx/search','BanxController@search');
    //Resoource
    Route::resource('banx', 'BanxController');
});