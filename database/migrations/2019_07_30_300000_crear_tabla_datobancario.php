<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CrearTablaDatobancario extends Migration
{
    public function up()
    {
        Schema::create('datobancario', function (Blueprint $table) {
            $table->increments('idaba');
            $table->string('idaop');
            $table->string('idpersona');
            $table->string('clave');
            $table->string('nombanco');           
            $table->timestamps();
            $table->dateTime('last_login')->nullable();

        });
    }
    
    public function down()
    {
        Schema::drop('datobancario');
    }
}
