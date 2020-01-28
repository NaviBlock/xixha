<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateTemporadaTable extends Migration{
    public function up(){
        Schema::create('temporada', function (Blueprint $table) {
            $table->increments('id_temporada');
            $table->integer('id_apicultor');
            $table->integer('id_api');
            $table->integer('id_apiario');
            $table->string('tipo_temporada');            
            $table->string('color');
            $table->string('tipo_floracion');
            $table->string('clima');            
            $table->string('temperatura');
            $table->string('observaciones');
            $table->boolean('mov');
        });
    }
    
    public function down()
    {
        Schema::drop('temporada');
    }
}