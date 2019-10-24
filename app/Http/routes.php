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
    Route::get('users/home','ApicultorController@index');   
    //users
    Route::get('users/padron','ApicultorController@padron');
    Route::get('users/search','ApicultorController@search');
    Route::get('users/show','ApicultorController@show');

    //Convocatoria
    Route::get('users/convocatoria','ApicultorController@convocatoria');
    Route::get('convocatoria','ApicultorController@convocatoria');

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
