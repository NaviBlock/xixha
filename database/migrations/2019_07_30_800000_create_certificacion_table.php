<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateCertificacionTable extends Migration{
    public function up(){
        Schema::create('certificacion', function (Blueprint $table) {
            $table->increments('id_certificacion');
            $table->integer('id_apicultor');
            $table->string('certificadora');
            $table->string('certificado');
            $table->string('certificadodigital');
        });
    }
    
    public function down()
    {
        Schema::drop('certificacion');
    }
}