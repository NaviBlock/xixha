<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateDataPiTable extends Migration{
    public function up(){
        Schema::create('datapi', function (Blueprint $table) {
            $table->increments('id_datapi');
            $table->integer('id_apicultor');
            $table->integer('id_certificacion');
            $table->integer('upp');
            $table->integer('pgn');
            $table->integer('clave_rast');            
        });
    }
    
    public function down()
    {
        Schema::drop('datapi');
    }
}