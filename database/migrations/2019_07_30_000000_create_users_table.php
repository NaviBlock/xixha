<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration{
    public function up(){
        Schema::create('users', function (Blueprint $table){
            $table->increments('id');
            $table->string('name');            
            $table->string('email');
            $table->string('password');
            $table->rememberToken();
            /*$table->string('apiToken')->rememberToken(str_random(10));
            $table->boolean('confirmed')->default(0);
            $table->string('confirmationCode')->nullable();    */  
            $table->string('rol')->default("User");    
            $table->timestamps();   
            //$table->dateTime('last_login')->nullable();       
            $table->boolean('is_super')->default(false); 
            $table->boolean('is_admin')->default(false); 
            $table->boolean('is_root')->default(false); 
        });
    }

    public function down(){
        Schema::drop('users');
        Schema::drop('migrations');
        Schema::drop('password_resets');
    }
}