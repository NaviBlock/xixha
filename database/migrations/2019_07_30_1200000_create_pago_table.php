<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreatePagoTable extends Migration{
    public function up(){
        Schema::create('pago', function (Blueprint $table) {
            $table->increments('id_pago');
            $table->integer('id_apicultor');
            $table->integer('folio');
            $table->integer('clave');
            $table->integer('no_cuenta');
            $table->string('banco');
            $table->string('nombre_cuenta');
            $table->string('token');
            $table->string('fecha');
        });
    }
    
    public function down()
    {
        Schema::drop('pago');
    }
}