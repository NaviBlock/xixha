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
            $table->string('rol')->default("User");
            $table->boolean('is_admin')->default(0);
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }
    public function down(){
        Schema::drop('users');
    }
}