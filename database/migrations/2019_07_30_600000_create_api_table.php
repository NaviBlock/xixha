<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateApiTable extends Migration{
    public function up(){
        Schema::create('api', function (Blueprint $table) {
            $table->increments('id_api');
            $table->integer('id_apicultor');
            $table->integer('no_colmena');
            $table->integer('prod_anual');
            $table->integer('prod_mes');
            $table->integer('kilo_actual');
            $table->integer('kilo_anterior');
        });
    }
    
    public function down()
    {
        Schema::drop('api');
    }
}