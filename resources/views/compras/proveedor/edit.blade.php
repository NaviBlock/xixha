@extends ('layouts.admin')
@section ('contenido')
	<div class = "row"> 
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<h3>Editar datos de: {{ $persona->nombre}}</h3>
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
	{!!Form::model($persona,['method'=>'PATCH','route'=>['compras.proveedor.update',$persona->idpersona]]) !!}
	{{Form::token()}}

	<div class="row">
		<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
			<h3 class="text-center">Datos Personales del Apicultor</h3><br>
		</div>
		
		<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
			<div class="form-group mf-form amber-textarea active-amber-textarea-2 input-group mb-3">
				<div class="input-group-append">
					<span class="input-group-text btn btn-warning" id="basic-addon2">Folio de: {{$persona->nombre}} {{$persona->apellidopa}} {{$persona->apellidoma}}</span><br>
				</div>
				<input type="text" name="folio" value="{{$persona->folio}}" disabled ="true" class="md-textarea form-control lineA "  aria-describedby="basic-addon2">
			</div>
		</div>
		
		<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
			<div class="form-group mf-form amber-textarea active-amber-textarea-2 input-group mb-3">			
				<span class="input-group-text" id="basic-addon2">Nombre del Apicultor</span>					
				<input type="text" name="nombre" required value="{{$persona->nombre}}" class="md-textarea form-control lineA " placeholder="Nombre..." aria-describedby="basic-addon2">

				<input type="text" name="apellidopa" required value="{{$persona->apellidopa}}" class="md-textarea form-control lineA " placeholder="Apellido Parteno..." aria-describedby="basic-addon2">

				<input type="text" name="apellidoma" required value="{{$persona->apellidoma}}" class="md-textarea form-control lineA " placeholder="Apellido Marteno..." aria-describedby="basic-addon2">		
			</div>
		</div>


		<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
			<div class="form-group mf-form amber-textarea active-amber-textarea-2 input-group mb-3">
				
				<!--input type="text" name="estadoP" value="{{$persona->estadoP}}" class="md-textarea form-control lineA " aria-describedby="basic-addon2"-->

				<div class="input-group-append">
					<span class="input-group-text btn btn-warning" id="basic-addon2">Estado</span><br>
					<select name="estadoP" value="{{$persona->estadoP}}" id="estadoP" class="md-textarea form-control lineA">				
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

				<input type="text" name="municipio" value="{{$persona->municipio}}" class="md-textarea form-control lineA " aria-describedby="basic-addon2">
				<div class="input-group-append">
					<span class="input-group-text btn btn-warning" id="basic-addon2">Municipio</span><br>
				</div>

				<input type="text" name="colonia" value="{{$persona->colonia}}" class="md-textarea form-control lineA " aria-describedby="basic-addon2">
				<div class="input-group-append">
					<span class="input-group-text btn btn-warning" id="basic-addon2">Colonia</span><br>
				</div>

				<input type="text" name="calle" value="{{$persona->calle}}" class="md-textarea form-control lineA " aria-describedby="basic-addon2">
				<div class="input-group-append">
					<span class="input-group-text btn btn-warning" id="basic-addon2">Calle</span><br>
				</div>
			</div>			
		</div>

		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group mf-form amber-textarea active-amber-textarea-2 input-group mb-3">
				<input type="text" name="telefono" value="{{$persona->telefono}}" class="md-textarea form-control lineA " aria-describedby="basic-addon2">
				<div class="input-group-append">
					<span class="input-group-text btn btn-warning" id="basic-addon2">Telefono</span><br>
				</div>
			</div>
		</div>

		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group mf-form amber-textarea active-amber-textarea-2 input-group mb-3">
				<input type="text" name="email" value="{{$persona->email}}" class="md-textarea form-control lineA  " aria-describedby="basic-addon2">
					<div class="input-group-append">
						<span class="input-group-text btn btn-warning" id="basic-addon2">Correo electronico</span><br>
					</div>
			</div>
		</div>

		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group mf-form amber-textarea active-amber-textarea-2 input-group mb-3">
				<select  name="sexo" value="{{$persona->sexo}}" id="sexo" class="md-textarea form-control lineA">
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

				<div class="input-group-append">
					<span class="input-group-text btn btn-warning" id="basic-addon2">SEXO</span><br>
				</div>
			</div>
		</div>

		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group mf-form amber-textarea active-amber-textarea-2 input-group mb-3">
				<input type="text" name="curp" value="{{$persona->curp}}" class="md-textarea form-control lineA " aria-describedby="basic-addon2">
					<div class="input-group-append">
						<span class="input-group-text btn btn-warning" id="basic-addon2">CURP</span><br>
					</div>
			</div>
		</div>

		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group mf-form amber-textarea active-amber-textarea-2 input-group mb-3">
				<input type="text" name="rfc" value="{{$persona->rfc}}" class="md-textarea form-control lineA " aria-describedby="basic-addon2">
					<div class="input-group-append">
						<span class="input-group-text btn btn-warning" id="basic-addon2">RFC</span><br>
					</div>
			</div>
		</div>
	
		<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
			<br><h3 class="text-center">Datos de Rastreabilidad</h3><br>
		</div>

		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group mf-form amber-textarea active-amber-textarea-2 input-group mb-3">
				<div class="input-group-append">
					<span class="input-group-text btn btn-warning" id="basic-addon2">Folio</span><br>
				</div>
				<input type="text" name="folio" value="{{$persona->folio}}" disabled ="true" class="md-textarea form-control lineA " aria-describedby="basic-addon2">
			</div>
		</div>

		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group mf-form amber-textarea active-amber-textarea-2 input-group mb-3">
				<input type="text" name="certificacion" value="{{$persona->certificacion}}" class="md-textarea form-control lineA " aria-describedby="basic-addon2">
				<div class="input-group-append">
					<span class="input-group-text btn btn-warning" id="basic-addon2">Tipo de Certificación</span><br>
				</div>
			</div>
		</div>

		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group mf-form amber-textarea active-amber-textarea-2 input-group mb-3">
				
				<select  name="temp_cosecha" value="{{$persona->temp_cosecha}}" id="temp_cosecha" class="md-textarea form-control lineA">

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

				<div class="input-group-append">
					<span class="input-group-text btn btn-warning" id="basic-addon2">Temporada de Cosecha</span><br>
				</div>
			</div>
		</div> 

		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group mf-form amber-textarea active-amber-textarea-2 input-group mb-3">
				<div class="input-group-append">
					<span class="input-group-text btn btn-warning" id="basic-addon2">Numeros de Colmenas o Chapetas</span>
				</div>
				<input type="text" name="num_colmena" value="{{$persona->num_colmena}}" class="md-textarea form-control lineA " aria-describedby="basic-addon2">
			</div>
		</div>
	
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group mf-form amber-textarea active-amber-textarea-2 input-group mb-3">
				<div class="input-group-append">
					<span class="input-group-text btn btn-warning" id="basic-addon2">UPP</span><br>
				</div>
				<input type="text" name="upp" value="{{$persona->upp}}" class="md-textarea form-control lineA " aria-describedby="basic-addon2">
			</div>
		</div> 
		
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group mf-form amber-textarea active-amber-textarea-2 input-group mb-3">
			<input type="text" name="pgn" value="{{$persona->pgn}}" class="md-textarea form-control lineA " aria-describedby="basic-addon2">
				<div class="input-group-append">
					<span class="input-group-text btn btn-warning" id="basic-addon2">PGN</span><br>
				</div>
			</div>
		</div>
	
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group mf-form amber-textarea active-amber-textarea-2 input-group mb-3">
				<input type="text" name="prod_anual" value="{{$persona->prod_anual}}" class="md-textarea form-control lineA " aria-describedby="basic-addon2">
				<div class="input-group-append">
					<span class="input-group-text btn btn-warning" id="basic-addon2">Produccion anual</span><br>
				</div>
			</div>
		</div>  
		
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group mf-form amber-textarea active-amber-textarea-2 input-group mb-3">
				<div class="input-group-append">
					<span class="input-group-text btn btn-warning" id="basic-addon2">Clave de Rasteabilidad</span><br>
				</div>
				<input type="text" name="clave_rast" value="{{$persona->clave_rast}}" class="md-textarea form-control lineA " aria-describedby="basic-addon2">
			</div>
		</div>
		<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 form-control">
			<div class="form-group mf-form amber-textarea active-amber-textarea-2 input-group mb-3">
				<div class="input-group-append">
					<span class="input-group-text btn btn-warning" id="basic-addto2">Localización de los Apiarios</span><br>
				</div>	
				<input rows="3" type="text" name="loc_api" value="{{$persona->loc_api}}" class="md-textarea form-control lineA" aria-describedby="basic-addto2">>Z
			</div>
		</div>

		<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
			<div class="form-group mf-form amber-textarea active-amber-textarea-2 input-group mb-3">
				<div class="input-group-append">
					<span class="input-group-text" id="basic-addon2">Observación</span><br>
				</div>
				<input type="text" name="observacion" value="{{$persona->observacion}}" class="md-textarea form-control lineA " aria-describedby="basic-addon2">
			</div>
		</div>
		<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
			<div class="form-group mf-form amber-textarea active-amber-textarea-2">			
				<button class="btn btn-primary btn-block" type="submit">Guardar</button><br>
				<button class="btn btn-danger btn-block " type="reset">Cancelar</button>
			</div>
		</div>
	</div>
	{!!Form::Close()!!}		
@endsection