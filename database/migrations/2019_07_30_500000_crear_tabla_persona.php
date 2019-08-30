<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CrearTablaPersona extends Migration{
    public function up(){
        Schema::create('persona', function (Blueprint $table) {
            $table->increments('idpersona');
            $table->string('tipo_persona');
            $table->string('apellidopa');        
            $table->string('apellidoma');
            $table->string('nombre');
            $table->timestamp('fecha_na');
            $table->string('sexo');
            $table->string('estadoP');  
            $table->string('curp');
            $table->string('rfc');  
            $table->string('n_int_fam');
            $table->string('calle');  
            $table->string('colonia');
            $table->string('municipio');  
            $table->string('telefono');
            $table->string('email');
            $table->string('num_colmena');
            $table->string('loc_api');
            $table->string('prod_anual');
            $table->string('kilo_actual');
            $table->string('temp_cosecha');  
            $table->string('upp');
            $table->string('pgn');  
            $table->string('clave_rast');
            $table->string('certificacion');  
            $table->timestamp('fecha_hora');
            $table->string('mov_col');  
            $table->string('donde');
            $table->string('observacion');            
            $table->string('folio');            
            $table->string('img_perfil');
            $table->string('estado');
            $table->string('nCuenta');  
            $table->string('clave');
            $table->string('banco');  
            $table->string('noOperacion');
            $table->string('opCantidad');  
            $table->string('opPrecio');
            $table->timestamp('opFecha');  
            $table->string('opTotal');
            
        });
    }

    public function down()
    {
        Schema::drop('persona');
    }
}