<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CrearTablaBanx extends Migration
{
    public function up()
    { 
        Schema::create('banx', function (Blueprint $table) {
            $table->increments('idop');
            $table->timestamp('fecha');
            $table->string('cantidad');
            $table->string('idp');
            $table->foreign('idp')
                ->references('idpersona')
                ->on('persona')
                ->onDelete('cascade');
            $table->string('idu');
            $table->foreign('idu')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->string('clave');
            $table->string('nombanco');           
            $table->string('token');
        });
    }    
    public function down()
    {
        Schema::drop('banx');
    }
}