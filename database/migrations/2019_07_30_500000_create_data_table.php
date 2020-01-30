<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateDataTable extends Migration{
    public function up(){
        Schema::create('data', function (Blueprint $table) {
            $table->increments('id_data');
            $table->integer('id_apicultor');
            $table->string('cp');
            $table->string('calle');
            $table->string('estado');
            $table->string('colonia');
            $table->string('municipio');
        });
    }
    
    public function down()
    {
        Schema::drop('data');
    }
}