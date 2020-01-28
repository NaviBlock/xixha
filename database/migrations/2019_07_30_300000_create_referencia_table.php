<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateReferenciaTable extends Migration{
    public function up(){
        Schema::create('referencia', function (Blueprint $table) {
            $table->increments('id_ref');
            $table->integer('id_apicultor');
            $table->timestamp('fecha_na');        
            $table->string('sexo');  
            $table->string('curp')->unique();
            $table->string('rfc')->unique();      
        });
    }
    
    public function down()
    {
        Schema::drop('referencia');
    }
}