<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateApiWebTable extends Migration{
    public function up(){
        Schema::create('apiweb', function (Blueprint $table) {
            $table->increments('id_apiweb');
            $table->integer('id_apicultor');
            $table->integer('telefono')->unique();
            $table->string('email')->unique();
            $table->string('facebook')->unique();
            $table->string('instagram')->unique();
            $table->string('twitter')->unique();
        });
    }
    
    public function down()
    {
        Schema::drop('apiweb');
    }
}