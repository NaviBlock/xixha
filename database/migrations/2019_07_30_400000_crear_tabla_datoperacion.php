<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CrearTablaDatoperacion extends Migration
{
    public function up()
    {
        Schema::create('datoperacion', function (Blueprint $table) {
            $table->increments('idaop');            
            $table->string('numeroperacion');            
            $table->timestamp('cantidad');
            $table->string('precio');
            $table->string('fecha');
            $table->string('total');           
            $table->timestamp();
            $table->dateTime('last_login')->nullable();
        });
    }

    public function down()
    {
        Schema::drop('datoperacion');
    }
}