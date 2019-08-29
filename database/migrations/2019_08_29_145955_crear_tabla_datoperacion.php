<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaDatoperacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datoperacion', function (Blueprint $table) {
            $table->increments('idaop');            
            $table->string('numeroperacion');            
            $table->string('cantidad');
            $table->string('precio');
            $table->string('fecha');
            $table->string('total');           
            $table->timestamps();
            $table->dateTime('last_login')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('datoperacion');
    }
}