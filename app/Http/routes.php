<?php
Route::get('/', function () {
   return view('auth/login');
   //return view('login');
});
Route::auth();
//Users
Route::group(['middleware' => 'user'], function(){
    //Index Dashboard   
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
//Admin
Route::group(['middleware' => 'admin'], function () {
    //Index Admin
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