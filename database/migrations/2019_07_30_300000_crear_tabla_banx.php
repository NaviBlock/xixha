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
            $table->string('idpersona');
            $table->string('nombre');
            $table->string('apellidopa');
            $table->string('apellidoma');
            $table->string('id');
            $table->string('name');
            $table->string('rol');
            $table->string('clave');
            $table->string('nombanco');
            $table->timestamp('created_at');
            $table->dateTime('last_login')->nullable();           
            $table->string('token');
        });
    }    
    public function down()
    {
        Schema::drop('banx');
    }
}