<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateFamiliaTable extends Migration{
    public function up(){
        Schema::create('familia', function (Blueprint $table) {
            $table->increments('id_familia');
            $table->integer('id_apicultor');
            $table->string('nombre');
            $table->string('apellido_pa');
            $table->string('apellido_ma');            
            $table->string('parentesco');
            $table->string('curp')->unique();
            $table->string('rfc')->unique();
        });
    }
    
    public function down()
    {
        Schema::drop('familia');
    }
}