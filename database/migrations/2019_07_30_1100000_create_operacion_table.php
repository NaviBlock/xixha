<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateOperacionTable extends Migration{
    public function up(){
        Schema::create('operacion', function (Blueprint $table) {
            $table->increments('id_operacion');
            $table->integer('id_apicultor');
            $table->integer('cantida');
            $table->integer('precio');
            $table->integer('total');
            $table->timestamp('fecha');            
        });
    }
    
    public function down()
    {
        Schema::drop('operacion');
    }
}