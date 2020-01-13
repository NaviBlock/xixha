@extends ('layouts.admin')
@section ('contenido')

<div class="row container-fluid col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto">
	@if(count($errors)>0)
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
			</ul>
		</div>
		@endif
	</div>

{!!Form::open(array('url'=>'root','method'=>'POST','autocomplete'=>'off','files'=>'true','enctype'=>'multipart/form-data'))!!}
{{Form::token()}}	

<!-- #Datos de Registro-->
	<!-- #Titulo-->
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 offset-lg-3 offset-md-3 offset-sm-3 offset-xs-3 text-center">
			<h3 class="e-text-color text-bor">Alta del Apicultor</h3>
		</div>

	<!-- #Alta de Apicultor-->
		<div class="collapse container-fluid row main col-md-12 col-sm-auto col-lg-12 py-4" id="p-id">
			<div class="card card-body">
			<!-- #Nombre del apicultor---->
				<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
					<div class="input-group mx-auto">
						<div class="input-group-prepend col-lg-11 col-md-11 col-sm-11 col-xs-11 mx-auto">							
							<input type="text" name="nombre" required value="{{old('nombre')}}" class="e-color-c input-group-text btn e-border md-textarea form-control lineA" placeholder="Nombre..." aria-describedby="basic-addon2">
							<input type="text" name="apellidopa" required value="{{old('apellidopa')}}" class="e-color-c input-group-text btn e-border md-textarea form-control lineA" placeholder="Apellido Parteno..." aria-describedby="basic-addon2">
							<input type="text" name="apellidoma" required value="{{old('apellidoma')}}" class="e-color-c input-group-text bt e-border md-textarea form-control lineA" placeholder="Apellido Marteno..." aria-describedby="basic-addon2">
						</div>
					</div>
				</div>

			<!-- #Sexo-->
				<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
					<div class="input-group mx-auto">
						<div class="input-group-prepend col-lg-11 col-md-11 col-sm-11 col-xs-11 mx-auto">							
							<select  name="sexo" value="{{old('sexo')}}" id="sexo" class="e-color md-textarea form-control lineA">
								<option value="">Sexo ("H","M")</option>
								<option value="HOMBRE">HOMBRE</option>
								<option value="MUJER">MUJER</option>								
							</select>
						</div>						
					</div>
				</div>
	
			<!-- #Curp-->
				<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
					<div class="input-group mx-auto">
						<div class="input-group-prepend col-lg-11 col-md-11 col-sm-11 col-xs-11 mx-auto">							
							<input type="text" name="curp" pattern="[0-9a-zA-Z]{18}"  value="{{old('curp')}}" id="curp" class="md-textarea form-control lineA e-color-c" placeholder="CURP 18 caracteres...">							
						</div>
					</div>
				</div>		

			<!-- #rfc-->
				<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
					<div class="input-group mx-auto">
						<div class="input-group-prepend col-lg-11 col-md-11 col-sm-11 col-xs-11 mx-auto">							
							<input type="text" name="rfc" value="{{old('rfc')}}" id="rfc" class="md-textarea form-control lineA e-color-c" placeholder="RFC 13 caracteres...">
						</div>
					</div>
				</div>			

			<!-- #Estado-->
				<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
					<div class="input-group mx-auto">
						<div class="input-group-prepend col-lg-11 col-md-11 col-sm-11 col-xs-11 mx-auto">													
							<select name="estadoP" value="{{old('estadoP')}}" id="estadoP" class="e-color-c md-textarea form-control lineA">
								<option value="">Estado</option>
								<option value="AGUASCALIENTES">AGUASCALIENTES</option>
								<option value="BAJA CALIFORNIA">BAJA CALIFORNIA</option>
								<option value="BAJA CALIFORNIA SUR">BAJA CALIFORNIA SUR</option>
								<option value="CAMPECHE">CAMPECHE</option>
								<option value="CHIAPAS">CHIAPAS</option>
								<option value="CHIHUAHUA">CHIHUAHUA</option>
								<option value="COAHUILA">COAHUILA</option>
								<option value="COLIMA">COLIMA</option>
								<option value="DISTRITO FEDERAL">DISTRITO FEDERAL</option>
								<option value="DURANGO">DURANGO</option>
								<option value="GUANAJUATO">GUANAJUATO</option>
								<option value="GUERRERO">GUERRERO</option>
								<option value="HIDALGO">HIDALGO</option>
								<option value="MICHOACAN">MICHOACAN</option>
								<option value="MORELOS">MORELOS</option>
								<option value="NAYARIT">NAYARIT</option>
								<option value="NUEVO LEO">NUEVO LEON</option>
								<option value="OAXACA">OAXACA</option>
								<option value="PUEBLA">PUEBLA</option>
								<option value="QUERETARO">QUERETARO</option>
								<option value="QUINTANA ROO">QUINTANA ROO</option>
								<option value="SINALOA">SINALOA</option>
								<option value="SONORA">SONORA</option>
								<option value="TABASCO">TABASCO</option>
								<option value="TAMAULIPAS">TAMAULIPAS</option>
								<option value="TLAXCALA">TLAXCALA</option>
								<option value="VERACRUZ">VERACRUZ</option>
								<option value="YUCATAN">YUCATÁN</option>
								<option value="ZACATECAS">ZACATECAS</option>
							</select>								
						</div>
					</div>
				</div>			

			<!-- #Municipio--->
				<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
					<div class="input-group mx-auto">
						<div class="input-group-prepend col-lg-11 col-md-11 col-sm-11 col-xs-11 mx-auto">													
							<input type="text" name="municipio" value="{{old('municipio')}}" id="municipio" class="e-color-c md-textarea form-control lineA" placeholder="MUNICIPIO...">
						</div>					
					</div>
				</div>	

			<!-- #Calle-->
				<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
					<div class="input-group mx-auto">
						<div class="input-group-prepend col-lg-11 col-md-11 col-sm-11 col-xs-11 mx-auto">
							<input type="text" name="calle" value="{{old('calle')}}" id="calle" class="e-color-c md-textarea form-control lineA" placeholder="CALLE...">
						</div>
					</div>
				</div>	

			<!--colonia/localidad-->
				<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
					<div class="input-group mx-auto">
						<div class="input-group-prepend col-lg-11 col-md-11 col-sm-11 col-xs-11 mx-auto">
							<input type="text" name="colonia" value="{{old('colonia')}}" id="colonia" class="e-color-c md-textarea form-control lineA" placeholder="COLONIA/LOCALIDAD...">
						</div>
					</div>
				</div>	

			<!--telefono-->
				<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
					<div class="input-group mx-auto">
						<div class="input-group-prepend col-lg-11 col-md-11 col-sm-11 col-xs-11 mx-auto">
							<input type="tel" name="telefono" pattern="[0-9]{10}" value="{{old('telefono')}}" class="e-color-c md-textarea form-control lineA" placeholder="Teléfono...">						
						</div>
					</div>
				</div>

			<!--email-->
				<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
					<div class="input-group mx-auto">
						<div class="input-group-prepend col-lg-11 col-md-11 col-sm-11 col-xs-11 mx-auto">													
							<input type="text" name="email" value="{{old('email')}}" id="email" class="e-color-c md-textarea form-control lineA" placeholder="Correo@Electronico" aria-label="Username" aria-describedby="addon-wrapping">						
						</div>
					</div>
				</div>
			</div>
		</div>

	<!-- #Datos de Rastreabilidad-->
		<!-- #Titulo-->
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 offset-lg-3 offset-md-3 offset-sm-3 offset-xs-3 text-center">
				<h3 class="e-text-color text-bor">Datos de Rastreabilidad</h3>
			</div>			
	<div class="collapse container-fluid row main col-md-12 col-sm-auto col-lg-12 py-4" id="px-id">
		<div class="card card-body">

			<!-- #Rasteabilidad-->
				<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
					<div class="input-group mx-auto">
						<div class="input-group-prepend col-lg-11 col-md-11 col-sm-11 col-xs-11 mx-auto">							
							<input type="text" name="clave_rast" value="{{old('clave_rast')}}" class="e-color-c md-textarea form-control lineB" placeholder="Clave de Rasteabilidad...">							
						</div>
					</div>
				</div>

			<!-- #UPP-->
				<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
					<div class="input-group mx-auto">
						<div class="input-group-prepend col-lg-11 col-md-11 col-sm-11 col-xs-11 mx-auto">							
							<input type="text" name="upp" value="{{old('upp')}}" class="e-color-c md-textarea form-control lineB" placeholder="UPP...">
						</div>
					</div>
				</div>

			<!-- #PGN-->
				<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
					<div class="input-group mx-auto">
						<div class="input-group-prepend col-lg-11 col-md-11 col-sm-11 col-xs-11 mx-auto">
							<input type="text" name="pgn" value="{{old('pgn')}}" class="e-color-c md-textarea form-control lineB" placeholder="PGN...">
						</div>
					</div>
				</div>

			<!-- #Temporada-->
				<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
					<div class="input-group mx-auto">
						<div class="input-group-prepend col-lg-11 col-md-11 col-sm-11 col-xs-11 mx-auto">							
							<select name="temp_cosecha" value="{{old('temp_cosecha')}}" class="e-color-c custom-select md-textarea form-control lineB" id="inputGroupSelect01">
								<option value="">Temporada de Cosecha</option>
								<option value="PRIMAVERA">PRIMAVERA</option>
								<option value="PRIMAVERA-VERANO">PRIMAVERA-VERANO</option>
								<option value="VERANO">VERANO</option>
								<option value="VERANO-OTOÑO">VERANO-OTOÑO</option>
								<option value="OTOÑO">OTOÑO</option>
								<option value="OTOÑO-INVIERNO">OTOÑO-INVIERNO</option>
								<option value="INVIERNO">INVIERNO</option>
								<option value="INVIERNO-PRIMAVERA">INVIERNO-PRIMAVERA</option>
							</select>
						</div>
					</div>
				</div>			

			<!-- #Kg-->
				<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
					<div class="input-group mx-auto">
						<div class="input-group-prepend col-lg-11 col-md-11 col-sm-11 col-xs-11 mx-auto">
							<input type="text" name="prod_anual" value="{{old('prod_anual')}}" class="e-color-c md-textarea form-control lineB" placeholder="Producción en Kg...">
						</div>
					</div>
				</div>

			<!-- #Chapetas-->
				<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
					<div class="input-group mx-auto">
						<div class="input-group-prepend col-lg-11 col-md-11 col-sm-11 col-xs-11 mx-auto">
							<input type="text" name="num_colmena" value="{{old('num_colmena')}}" class="e-color-c md-textarea form-control lineB" placeholder="Numero de Colmena...">								
						</div>
					</div>
				</div>

			<!-- #Certificación-->
				<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
					<div class="input-group mx-auto">
						<div class="input-group-prepend col-lg-11 col-md-11 col-sm-11 col-xs-11 mx-auto">
							<input type="text" name="certificacion" value="{{old('certificacion')}}" class="e-color-c md-textarea form-control lineB" placeholder="Tipo de Certificación...">							
						</div>
					</div>
				</div>

			<!-- #Localización-->
				<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
					<div class="input-group mx-auto">
						<div class="input-group-prepend col-lg-11 col-md-11 col-sm-11 col-xs-11 mx-auto">							
							<textarea rows="3" name="loc_api" value="{{old('loc_api')}}" class="e-color-c form-control lineB" placeholder="Localización de los Apiarios..."></textarea>								
						</div>
					</div>
				</div>				
				
			<!-- #Donde-->
				<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center aolq" id="datoy">
					<div class="input-group mx-auto">
						<div class="input-group-prepend col-lg-11 col-md-11 col-sm-11 col-xs-11 mx-auto">
							<textarea rows="3" name="donde" value="{{old('donde')}}" class="e-color-c form-control lineB" placeholder="¿Mueve sus Colmenas?..."></textarea>
						</div>
					</div>
				</div>		
		
			<!-- #Observación-->
				<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center aolq" id="datoy">			
					<div class="input-group mx-auto">
						<div class="input-group-prepend col-lg-11 col-md-11 col-sm-11 col-xs-11 mx-auto">							
							<textarea rows="3" name="observacion" value="{{old('observacion')}}" class="e-color-c form-control lineB" placeholder="Observación..."></textarea>							
						</div>
					</div>
				</div>	

			<!-- #Foto-->
				<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center aolq" id="datoy">					
					<div class="input-group mx-auto">
						<div class="input-group-prepend col-lg-11 col-md-11 col-sm-11 col-xs-11 mx-auto">							
							<input accept=".jpg, .png, .jpeg, .gif" id="img_perfil" name="img_perfil" type="file" class="e-color-c text-center file hidden lineA form-control md-textarea btn btn-primary btn-file" data-browse-on-zone-click="true" readonly="readonly" value="{{('img_perfil')}}">						
						</div>
					</div>
				</div>	
			</div>
		</div>

		<!-- #Botones-->
			<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center aolq" id="datoy">
				<div class="input-group mx-auto">
					<div class="input-group-prepend col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto">
						<button class="btn btn-primary btn-block btn-lg" type="submit">Guardar</button>
					</div>
				</div>	
			</div>

	{!!Form::Close()!!}	 
	<script>
		$('#p-id').collapse();
		$('#px-id').collapse();
	</script>
@endsection