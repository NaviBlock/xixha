<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateApicultorTable extends Migration{
    public function up(){
        Schema::create('apicultor', function (Blueprint $table) {            
            $table->increments('id_apicultor');
            $table->string('nombre');
            $table->string('apellido_pa');
            $table->string('apellido_ma');        
        });
    }
    
    public function down()
    {
        Schema::drop('apicultor');
    }
}