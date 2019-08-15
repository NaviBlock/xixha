<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateHistbTable extends Migration{
    public function up(){
        Schema::create('histb', function (Blueprint $table){
            $table->increments('idh');
            $table->string('cantidad');
            $table->string('precio');
            $table->string('fecha');
            $table->string('total');
        });
    }
    public function down(){
        Schema::drop('histb');
    }
}