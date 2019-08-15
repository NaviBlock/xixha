<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateBancTable extends Migration{
    public function up(){
        Schema::create('banc', function (Blueprint $table){
            $table->increments('idb');
            $table->string('ncuenta');            
            $table->string('clabe');
            $table->string('banco');
        });
    }
    public function down(){
        Schema::drop('banc');
    }
}