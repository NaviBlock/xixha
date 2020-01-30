<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateGpsApiarioTable extends Migration
{
    public function up()
    {
        Schema::create('gps_apiario', function (Blueprint $table) {
            $table->increments('id_apiario');
            $table->integer('id_apicultor');
            $table->integer('gps_data');            
        });
    }    
    public function down()
    {
        Schema::drop('gps_apiario');
    }
}