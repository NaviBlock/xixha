@extends ('layouts.adminadmin')
@section ('contenido')
<div class="row"> 
	<div class="container-fluid">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto">			
			<!---Titulo---->
				<div class="text-center py-4">				
					<h3 class="e-text-color">Alta del Apicultor</h3>
				</div>	
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
	</div>
</div>
{!!Form::open(array('url'=>'administradors','method'=>'POST','autocomplete'=>'off','files'=>'true','enctype'=>'multipart/form-data'))!!}
{{Form::token()}}	
<div class="container-fluid">
	<div class="row">
		<div class="main col-md-12 ml-sm-auto col-lg-12 py-4">
			<!---Nombre del apicultor---->
				<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center py-4">
					<div class="input-group mx-auto">
						<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
							<div class="input-group-prepend">
								<input type="text" name="nombre" required value="{{old('nombre')}}" class="input-group-text e-border md-textarea form-control lineA" placeholder="Nombre..." aria-describedby="basic-addon2">
								<input type="text" name="apellidopa" required value="{{old('apellidopa')}}" class="input-group-text e-border md-textarea form-control lineA" placeholder="Apellido Parteno..." aria-describedby="basic-addon2">
								<input type="text" name="apellidoma" required value="{{old('apellidoma')}}" class="input-group-text e-border md-textarea form-control lineA" placeholder="Apellido Marteno..." aria-describedby="basic-addon2">
							</div>
						</div>
					</div>
				</div>

			<!---sexo---->
				<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
					<div class="input-group mx-auto">
						<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon2">SEXO</span>
								<select  name="sexo" value="{{old('sexo')}}" id="sexo" class="md-textarea form-control lineA">
									<option value="HOMBRE">HOMBRE</option>
									<option value="MUJER">MUJER</option>
								</select>
							</div>
						</div>
					</div>
				</div>
		
			<!---curp---->
				<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
					<div class="input-group mx-auto">
						<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon2">CURP</span>
								<input type="text" name="curp" pattern="[0-9a-zA-Z]{18}"  value="{{old('curp')}}" id="curp" class="md-textarea form-control lineA" placeholder="CURP...">
							</div>
						</div>
					</div>
				</div>		

			<!---rfc---->
				<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
						<div class="input-group mx-auto">
							<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon2">RFC</span>
									<input type="text" name="rfc" value="{{old('rfc')}}" id="rfc" class="md-textarea form-control lineA" placeholder="RFC...">		
								</div>
							</div>
						</div>
					</div>		

			<!---estado---->
				<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
					<div class="input-group mx-auto">
						<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon2">Estado</span>			
										<select name="estadoP" value="{{old('estadoP')}}" id="estadoP" class="md-textarea form-control lineA">
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
				</div>		

			<!---municipio---->
				<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
					<div class="input-group mx-auto">
						<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon2">MUNICIPIO</span>
								<input type="text" name="municipio" value="{{old('municipio')}}" id="municipio" class="md-textarea form-control lineA" placeholder="MUNICIPIO...">
							</div>
						</div>
					</div>
				</div>	

			<!--calle-->
				<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
					<div class="input-group mx-auto">
						<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon2">CALLE</span>
								<input type="text" name="calle" value="{{old('calle')}}" id="calle" class="md-textarea form-control lineA" placeholder="CALLE...">				
							</div>
						</div>
					</div>
				</div>	

			<!--colonia/localidad-->
				<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
					<div class="input-group mx-auto">
						<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon2">COLONIA/LOCALIDAD</span>
								<input type="text" name="colonia" value="{{old('colonia')}}" id="colonia" class="md-textarea form-control lineA" placeholder="COLONIA/LOCALIDAD...">
							</div>
						</div>
					</div>
				</div>	

			<!--telefono-->
				<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
					<div class="input-group mx-auto">
						<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon2">Teléfono 10 Dígitos</span>
								<input type="tel" name="telefono" pattern="[0-9]{10}" value="{{old('telefono')}}" class="md-textarea form-control lineA" placeholder="Teléfono...">
							</div>
						</div>
					</div>
				</div>

			<!--email-->
				<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
					<div class="input-group mx-auto">
						<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
							<div class="input-group-prepend">
								<span class="input-group-text" id="email">@</span>	
								<input type="text" name="email" value="{{old('email')}}" id="email" class="md-textarea form-control lineA" placeholder="Correo Electronico..." aria-label="Username" aria-describedby="addon-wrapping">
							</div>
						</div>
					</div>
				</div>

			<!--Datos-->
				<div class="text-center py-4">
					<h3 class="e-text-color">Datos de Rastreabilidad</h3>
				</div>
			
			<!--Rasteabilidad-->
				<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
					<div class="input-group mx-auto">
						<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon2">Clave de Rasteabilidad</span>
								<input type="text" name="clave_rast" value="{{old('clave_rast')}}" class="md-textarea form-control lineB" placeholder="Clave de Rasteabilidad...">
							</div>
						</div>
					</div>
				</div>

			<!--upp-->
				<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
					<div class="input-group mx-auto">
						<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon2">UPP</span>
								<input type="text" name="upp" value="{{old('upp')}}" class="md-textarea form-control lineB" placeholder="UPP...">
							</div>
						</div>
					</div>
				</div>

			<!--pgn-->
				<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
					<div class="input-group mx-auto">
						<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon2">PGN</span>			
								<input type="text" name="pgn" value="{{old('pgn')}}" class="md-textarea form-control lineB" placeholder="PGN...">
							</div>
						</div>
					</div>
				</div>

			<!--temporada-->
				<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
					<div class="input-group mx-auto">
						<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon2 text-center" for="inputGroupSelect01">Temporada de Cosecha</span>
								<select name="temp_cosecha" value="{{old('temp_cosecha')}}" class="custom-select md-textarea form-control lineB" id="inputGroupSelect01">
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
				</div>

			<!--kg-->
				<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
					<div class="input-group mx-auto">
						<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon2">Producción en Kg</span>
								<input type="text" name="prod_anual" value="{{old('prod_anual')}}" class="md-textarea form-control lineB" placeholder="Producción en Kg...">		
							</div>
						</div>
					</div>
				</div>

			<!--chapetas-->
				<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
					<div class="input-group mx-auto">
						<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon2">Numeros de Colmenas o Chapetas</span>
								<input type="text" name="num_colmena" value="{{old('num_colmena')}}" class="md-textarea form-control lineB" placeholder="Numero de Colmena...">	
							</div>
						</div>
					</div>
				</div>

			<!--certificacion-->
				<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
					<div class="input-group mx-auto">
						<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon2">Tipo de Certificación</span>
								<input type="text" name="certificacion" value="{{old('certificacion')}}" class="md-textarea form-control lineB" placeholder="Tipo de Certificación...">
							</div>
						</div>
					</div>
				</div>

			<!--localizacion-->
				<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
					<div class="input-group mx-auto">
						<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon2">Localización de los Apiarios</span>				
								<textarea rows="3" name="loc_api" value="{{old('loc_api')}}" class="form-control lineB" placeholder="Localización de los Apiarios..."></textarea>	
							</div>
						</div>
					</div>
				</div>				
				
			<!--colmenas-->
				<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
					<div class="input-group mx-auto">
						<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon2">¿Mueve sus Colmenas?</span>	
								<div class="" selected>
									<button type="button" onclick="datoxx();" name="SI" class="btn btn-outline-primary ">SI</button>			
									<button type="button" onclick="datox();"  name="NO" class="btn btn-outline-danger">NO</button>
								</div>
							</div>
						</div>
					</div>
				</div>					

			<!--donde-->
				<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center aolq" id="datoy">
					<div class="input-group mx-auto">
						<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
							<div class="input-group-prepend">
								<textarea rows="3" name="donde" value="{{old('donde')}}" class="form-control lineB" placeholder="¿A Dónde?..."></textarea>		
							</div>
						</div>
					</div>
				</div>		
		
			<!--observacion-->
				<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center aolq" id="datoy">					<div class="input-group mx-auto">
						<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon2">Observación</span>
								<textarea rows="3" name="observacion" value="{{old('observacion')}}" class="form-control lineB" placeholder="Observación..."></textarea>	
							</div>
						</div>
					</div>
				</div>	

			<!--foto-->
				<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center aolq" id="datoy">					<div class="input-group mx-auto">
						<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
							<div class="input-group-prepend">
								<input accept=".jpg, .png, .jpeg, .gif" id="img_perfil" name="img_perfil" type="file" class="text-center file hidden lineA form-control md-textarea btn btn-primary btn-file" data-browse-on-zone-click="true" readonly="readonly" value="{{('img_perfil')}}">
							</div>
						</div>
					</div>
				</div>	

			<!--botones-->
				<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center aolq" id="datoy">					<div class="input-group mx-auto">
						<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
							<div class="input-group-prepend">				
								<button class="btn btn-primary btn-block btn-lg" type="submit">Guardar</button><br>
								<button class="btn btn-danger btn-block btn-lg" type="reset">Cancelar</button>
							</div>
						</div>
					</div>
				</div>	

			</div>
		</div>
		{!!Form::Close()!!}	
	</div> 
</div>
@endsection