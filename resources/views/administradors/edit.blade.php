@extends ('layouts.adminadmin')
@section ('contenido')
<div class = "row"> 
	<div class="container-fluid">
		<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 mx-auto">
			<h3 class="e-text-color">Editar datos de: {{ $persona->nombre}}</h3>
			@if(count($errors)>0)
				<div class="alert alert-danger">
					<ul> 
						@foreach($errors->all() as $error)
							<li>{{$error}}</li>
						@endforeach
					</ul> 
				</div> 
			@endif
		</div>  
	</div>
</div>
{!!Form::model($persona,['method'=>'PATCH','route'=>['administradors.update',$persona->idpersona]]) !!}
{{Form::token()}}

<div class="container-fluid">
	<div class="row">
		<div class="main col-md-12 ml-sm-auto col-lg-12 py-4">

		<!--Titulo-->
			<div class="text-center">
				<h3 class="e-text-color">Datos Personales del Apicultor</h3>
			</div>

		<!---Nombre del apicultor---->
			<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center py-4">
				<div class="input-group mx-auto">
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
						<div class="input-group-prepend">
							<span class="text-center input-group-text btn btn-warning" id="basic-addon101">Folio de: {{$persona->nombre}} {{$persona->apellidopa}} {{$persona->apellidoma}}</span>
							<input type="text" name="folio" value="{{$persona->folio}}" disabled ="true" class="input-group-text e-border md-textarea form-control lineA" aria-describedby="basic-addon101">
						</div>
					</div>
				</div>
			</div>
		
		<!--Nombre--->
			<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">	
				<div class="input-group mx-auto">
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
						<div class="input-group-prepend">
							<span class="text-center input-group-text btn btn-warning" id="basic-addon102">Nombre del Apicultor</span>
							<input type="text" name="nombre" required value="{{$persona->nombre}}" disabled="true" class="input-group-text e-border md-textarea form-control lineA" placeholder="Nombre..." aria-describedby="basic-addon102">
							<input type="text" name="apellidopa" required value="{{$persona->apellidopa}}" disabled="true" class="input-group-text e-border md-textarea form-control lineA" placeholder="Apellido Parteno..." aria-describedby="basic-addon102">
							<input type="text" name="apellidoma" required value="{{$persona->apellidoma}}" disabled="true" class="input-group-text e-border md-textarea form-control lineA" placeholder="Apellido Marteno..." aria-describedby="basic-addon102">		
						</div>
					</div>
				</div>
			</div>

		<!--Estado-->
			<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
				<div class="input-group mx-auto">
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
						<div class="input-group-prepend">								
							<span class="text-center input-group-text btn btn-warning" id="basic-addon103">Estado</span>
							<select name="estadoP" value="{{$persona->estadoP}}" id="estadoP" class="e-border md-textarea form-control lineA" aria-describebdy="basic-addon103">				
								<option value="AGUASCALIENTES"
									<?php 
										if($persona->estadoP=="AGUASCALIENTES") 
											echo "selected";
										?>>AGUASCALIENTES</option>

								<option value="BAJA CALIFORNIA"
									<?php 
										if($persona->estadoP=="BAJA CALIFORNIA") 
											echo "selected";
										?>>BAJA CALIFORNIA</option>

								<option value="BAJA CALIFORNIA SUR"
									<?php
										if($persona->estadoP=="BAJA CALIFORNIA SUR")
											echo "selected";
										?>>BAJA CALIFORNIA SUR</option>

								<option value="CAMPECHE" 
									<?php
										if($persona->estadoP=="CAMPECHE")
											echo "selected";
										?>>CAMPECHE</option>
									
								<option value="CHIAPAS" 
									<?php
										if($persona->estadoP=="CHIAPAS")
											echo "selected";
										?>>CHIAPAS</option>

								<option value="CHIHUAHUA" 
									<?php
										if($persona->estadoP=="CHIHUAHUA")
											echo "selected";
										?>>CHIHUAHUA</option>

								<option value="COAHUILA" 
									<?php
										if($persona->estadoP=="COAHUILA")
											echo "selected";
										?>>COAHUILA</option>

								<option value="COLIMA" 
									<?php
										if($persona->estadoP=="COLIMA")
											echo "selected";
										?>>COLIMA</option>

								<option value="DISTRITO FEDERAL" 
									<?php
										if($persona->estadoP=="DISTRITO FEDERAL")
											echo "selected";
										?>>DISTRITO FEDERAL</option>

								<option value="DURANGO" 
									<?php
										if($persona->estadoP=="DURANGO")
											echo "selected";
										?>>DURANGO</option>

								<option value="GUANAJUATO" 
									<?php
										if($persona->estadoP=="GUANAJUATO")
											echo "selected";
										?>>GUANAJUATO</option>

								<option value="GUERRERO" 
									<?php
										if($persona->estadoP=="GUERRERO")
											echo "selected";
										?>>GUERRERO</option>

								<option value="HIDALGO" 
									<?php
										if($persona->estadoP=="HIDALGO")
											echo "selected";
										?>>HIDALGO</option>

								<option value="MICHOACAN" 
									<?php
										if($persona->estadoP=="MICHOACAN")
											echo "selected";
										?>>MICHOACAN</option>

								<option value="MORELOS" 
									<?php
										if($persona->estadoP=="MORELOS")
											echo "selected";
										?>>MORELOS</option>

								<option value="NAYARIT" 
									<?php
										if($persona->estadoP=="NAYARIT")
											echo "selected";
										?>>NAYARIT</option>

								<option value="NUEVO LEO" 
									<?php
										if($persona->estadoP=="NUEVO LEO")
											echo "selected";
										?>>NUEVO LEON</option>

								<option value="OAXACA" 
									<?php
										if($persona->estadoP=="OAXACA")
											echo "selected";
										?>>OAXACA</option>

								<option value="PUEBLA" 
									<?php
										if($persona->estadoP=="PUEBLA")
											echo "selected";
										?>>PUEBLA</option>

								<option value="QUERETARO" 
									<?php
										if($persona->estadoP=="QUERETARO")
											echo "selected";
										?>>QUERETARO</option>

								<option value="QUINTANA ROO" 
									<?php
										if($persona->estadoP=="QUINTANA ROO")
											echo "selected";
										?>>QUINTANA ROO</option>

								<option value="SINALOA" 
									<?php
										if($persona->estadoP=="SINALOA")
											echo "selected";
										?>>SINALOA</option>

								<option value="SONORA" 
									<?php
										if($persona->estadoP=="SONORA")
											echo "selected";
										?>>SONORA</option>
								
								<option value="TABASCO" 
									<?php
										if($persona->estadoP=="TABASCO")
											echo "selected";
										?>>TABASCO</option>
								
								<option value="TAMAULIPAS" 
									<?php
										if($persona->estadoP=="TAMAULIPAS")
											echo "selected";
										?>>TAMAULIPAS</option>
								
								<option value="TLAXCALA" 
									<?php
										if($persona->estadoP=="TLAXCALA")
											echo "selected";
										?>>TLAXCALA</option>
								
								<option value="VERACRUZ" 
									<?php
										if($persona->estadoP=="VERACRUZ")
											echo "selected";
										?>>VERACRUZ</option>
								
								<option value="YUCATAN" 
									<?php
										if($persona->estadoP=="YUCATAN")
											echo "selected";
										?>>YUCATÁN</option>
								
								<option value="ZACATECAS" 
									<?php
										if($persona->estadoP=="ZACATECAS")
											echo "selected";
										?>>ZACATECAS</option>										
							</select>
						</div>
					</div>
				</div>
			</div>
		
		<!--Municipio-->
			<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
				<div class="input-group mx-auto">
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
						<div class="input-group-prepend">
							<span class="text-center input-group-text btn btn-warning" id="basic-addon104">Municipio</span>
							<input type="text" name="municipio" value="{{$persona->municipio}}" class="e-border md-textarea form-control lineA btn btn-warning" aria-describedby="basic-addon104">							
						</div>
					</div>
				</div>
			</div>

		<!--Colonia-->
			<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
				<div class="input-group mx-auto">
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
						<div class="input-group-prepend">
							<span class="text-center input-group-text btn btn-warning" id="basic-addon105">Colonia</span>
							<input type="text" name="colonia" value="{{$persona->colonia}}" class="e-border md-textarea form-control lineA btn btn-warning" aria-describedby="basic-addon105">													
						</div>
					</div>
				</div>
			</div>

		<!--Calle-->
			<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
				<div class="input-group mx-auto">
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
						<div class="input-group-prepend">
							<span class="input-group-text btn btn-warning" id="basic-addon106">Calle</span>
							<input type="text" name="calle" value="{{$persona->calle}}" class="e-border md-textarea form-control lineA btn btn-warning" aria-describedby="basic-addon106">												
						</div>
					</div>			
				</div>
			</div>

		<!--Telefono-->
			<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
				<div class="input-group mx-auto">
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
						<div class="input-group-prepend">
							<span class="input-group-text btn btn-warning" id="basic-addon107">Telefono</span>
							<input type="text" name="telefono" value="{{$persona->telefono}}" class="e-border md-textarea form-control lineA btn btn-warning" aria-describedby="basic-addon107">
						</div>
					</div>
				</div>
			</div>


		<!--Correo-->
			<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
				<div class="input-group mx-auto">
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
						<div class="input-group-prepend">									
							<span class="input-group-text btn btn-warning" id="basic-addon108">Correo electronico</span>
							<input type="text" name="email" value="{{$persona->email}}" class="e-border md-textarea form-control lineA btn btn-warning" aria-describedby="basic-addon108">
						</div>
					</div>
				</div>
			</div>


		<!--Sexo-->
			<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
				<div class="input-group mx-auto">
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
						<div class="input-group-prepend">
							<span class="input-group-text btn btn-warning" id="basic-addon109">SEXO</span>
							<select  name="sexo" value="{{$persona->sexo}}" id="sexo" class="e-border md-textarea form-control lineA">
								<option value="HOMBRE"<?php 
									if($persona->sexo=="HOMBRE") 
										echo "selected"; 
									?>
									>HOMBRE</option>
								<option value="MUJER"<?php 
									if($persona->sexo=="MUJER") 
										echo "selected";
									?>
									>MUJER</option>
							</select>					
						</div>
					</div>
				</div>
			</div>

		<!--curp-->
			<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
				<div class="input-group mx-auto">
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
						<div class="input-group-prepend">
							<span class="input-group-text btn btn-warning" id="basic-addon110">CURP</span>
							<input type="text" name="curp" value="{{$persona->curp}}" class="e-border md-textarea form-control lineA btn btn-warning" aria-describedby="basic-addon110">						
						</div>
					</div>					
				</div>
			</div>

		<!--rfc-->
			<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
				<div class="input-group mx-auto">
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
						<div class="input-group-prepend">
							<span class="input-group-text btn btn-warning" id="basic-addon111">RFC</span>
							<input type="text" name="rfc" value="{{$persona->rfc}}" class="e-border md-textarea form-control lineA btn btn-warning" aria-describedby="basic-addon111">
						</div>
					</div>
				</div>
			</div>
	
		<!--Sub-Titulo-->
			<div class="text-center"><br><br><br>
				<h3 class="e-text-color">Datos de Rastreabilidad</h3>
			</div>

		<!---Folio-->
			<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
				<div class="input-group mx-auto">
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
						<div class="input-group-prepend">					
							<span class="input-group-text btn btn-warning" id="basic-addon112">Folio</span>			
							<input type="text" name="folio" value="{{$persona->folio}}" disabled ="true" class="e-border md-textarea form-control lineA btn btn-warning" aria-describedby="basic-addon112">
						</div>
					</div>
				</div> 
			</div>

		<!---Tipo Certificacion-->
			<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
				<div class="input-group mx-auto">
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
						<div class="input-group-prepend">
							<span class="input-group-text btn btn-warning " id="basic-addon113">Tipo de Certificación</span>
							<input type="text" name="certificacion" value="{{$persona->certificacion}}" class="e-border md-textarea form-control lineA btn btn-warning" aria-describedby="basic-addon113">
						</div>
					</div>
				</div>
			</div>

		<!---Temp-->
			<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
				<div class="input-group mx-auto">
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
						<div class="input-group-prepend">	
							<span class="input-group-text btn btn-warning" id="basic-addon114">Temporada de Cosecha</span>		
							<select  name="temp_cosecha" value="{{$persona->temp_cosecha}}" id="temp_cosecha" class="e-border md-textarea form-control lineA">
								<option value="PRIMAVERA"<?php 
									if($persona->temp_cosecha=="PRIMAVERA") 
										echo "selected"; 
									?>>PRIMAVERA</option>

								<option value="PRIMAVERA-VERANO"<?php 
									if($persona->temp_cosecha=="PRIMAVERA-VERANO") 
										echo "selected"; 
									?>>PRIMAVERA-VERANO</option>

								<option value="VERANO"<?php 
									if($persona->temp_cosecha=="VERANO") 
										echo "selected"; 
									?>>VERANO</option>

								<option value="VERANO-OTOÑO"<?php 
									if($persona->temp_cosecha=="VERANO-OTOÑO") 
										echo "selected"; 
									?>>VERANO-OTOÑO</option>

								<option value="OTOÑO"<?php 
									if($persona->temp_cosecha=="OTOÑO") 
										echo "selected"; 
									?>>OTOÑO</option>

								<option value="OTOÑO-INVIERNO"<?php 
									if($persona->temp_cosecha=="OTOÑO-INVIERNO") 
										echo "selected"; 
									?>>OTOÑO-INVIERNO</option>

								<option value="INVIERNO"<?php 
									if($persona->temp_cosecha=="INVIERNO") 
										echo "selected"; 
									?>>INVIERNO</option>

								<option value="INVIERNO-PRIMAVERA"<?php 
									if($persona->temp_cosecha=="INVIERNO-PRIMAVERA") 
										echo "selected"; 
									?>>INVIERNO-PRIMAVERA</option>
							</select>									
						</div>
					</div>
				</div> 
			</div>

		<!---chapetas-->
			<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
				<div class="input-group mx-auto">
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
						<div class="input-group-prepend">
							<span class="input-group-text btn btn-warning" id="basic-addon115">Numeros de Colmenas o Chapetas</span>
							<input type="text" name="num_colmena" value="{{$persona->num_colmena}}" class="e-border md-textarea form-control lineA btn btn-warning" aria-describedby="basic-addon115">
						</div>
					</div>
				</div>
			</div>
	
		<!---upp-->
			<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
				<div class="input-group mx-auto">
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
						<div class="input-group-prepend">
							<span class="input-group-text btn btn-warning" id="basic-addon116">UPP</span>
							<input type="text" name="upp" value="{{$persona->upp}}" class="e-border md-textarea form-control lineA btn btn-warning" aria-describedby="basic-addon116">
						</div>
					</div> 
				</div>
			</div>
		
		<!---pgn-->
			<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
				<div class="input-group mx-auto">
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
						<div class="input-group-prepend">
							<span class="input-group-text btn btn-warning" id="basic-addon117">PGN</span>
							<input type="text" name="pgn" value="{{$persona->pgn}}" class="e-border md-textarea form-control lineA btn btn-warning" aria-describedby="basic-addon117">
						</div>
					</div>
				</div>
			</div>
	
		<!---produccion-->
			<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
				<div class="input-group mx-auto">
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
						<div class="input-group-prepend">
							<span class="input-group-text btn btn-warning" id="basic-addon118">Produccion anual</span>
							<input type="text" name="prod_anual" value="{{$persona->prod_anual}}" class="e-border md-textarea form-control lineA btn btn-warning" aria-describedby="basic-addon118">
						</div>
					</div>
				</div>  
			</div>
		
		<!---clave-->
			<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
				<div class="input-group mx-auto">
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
						<div class="input-group-prepend">				
							<span class="input-group-text btn btn-warning" id="basic-addon119">Clave de Rasteabilidad</span>
							<input type="text" name="clave_rast" value="{{$persona->clave_rast}}" class="e-border md-textarea form-control lineA btn btn-warning" aria-describedby="basic-addon119">
						</div>
					</div>
				</div>
			</div>

		<!---localizacion-->
			<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
				<div class="input-group mx-auto">
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
						<div class="input-group-prepend">
							<span class="input-group-text btn btn-warning" id="basic-addon120">Localización de los Apiarios</span>
							<input rows="3" type="text" name="loc_api" value="{{$persona->loc_api}}" class="e-border md-textarea form-control lineA btn btn-warning" aria-describedby="basic-addon120">
						</div>
					</div>
				</div>
			</div>

		<!---observacion-->
			<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
				<div class="input-group mx-auto">
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
						<div class="input-group-prepend">				
							<span class="input-group-text" id="basic-addon121">Observación</span><br>				
							<input type="text" name="observacion" value="{{$persona->observacion}}" class="e-border md-textarea form-control lineA btn btn-warning" aria-describedby="basic-addon121">
						</div>
					</div>
				</div>
			</div>

		<!---botones-->
			<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
				<div class="input-group mx-auto">
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
						<div class="input-group-prepend">			
							<button class="btn btn-primary btn-block" type="submit">Guardar</button><br>
							<button class="btn btn-danger btn-block " type="reset">Cancelar</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	{!!Form::Close()!!}		
@endsection