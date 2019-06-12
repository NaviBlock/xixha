@extends ('layouts.admin')
@section ('contenido')
<div class="container-fluid"> 
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<br><br>
			<h3 class="text-center">Alta del Apicultor</h3>
			<br>
			@if(count($errors)>0)
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{$error}}</li>
						@endforeach
					</ul> 
				</div>
			@endif  
			{!!Form::open(array('url'=>'compras/proveedor','method'=>'POST','autocomplete'=>'off'))!!}
			{{Form::token()}}	
			<div class="form-group mf-form amber-textarea active-amber-textarea-2 input-group mb-3">
				<div class="aol input-group-prepend col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<span class="input-group-text" id="basic-addon2">Nombre del Apicultor</span>
					
					<input type="text" name="nombre" required value="{{old('nombre')}}" class="md-textarea form-control lineA " placeholder="Nombre..." aria-describedby="basic-addon2">

					<input type="text" name="apellidopa" required value="{{old('apellidopa')}}" class="md-textarea form-control lineA " placeholder="Apellido Parteno..." aria-describedby="basic-addon2">

					<input type="text" name="apellidoma" required value="{{old('apellidoma')}}" class="md-textarea form-control lineA " placeholder="Apellido Marteno..." aria-describedby="basic-addon2">
				</div>
			</div>

			<div class="form-group mf-form amber-textarea active-amber-textarea-2 input-group mb-3">
				<div class="input-group-append">
					<span class="input-group-text" id="basic-addon2">SEXO</span>
				</div>			
				<select  name="sexo" value="{{old('sexo')}}" id="sexo" class="md-textarea form-control lineA">
					<option value="Hombre">Hombre</option>
					<option value="Mujer">Mujer</option>
				</select>
			</div>

			<div class="form-group mf-form amber-textarea active-amber-textarea-2 input-group mb-3">
				<input type="text" name="curp" pattern="[0-9,a-z,A-Z]{18}"  value="{{old('curp')}}" id="curp" class="md-textarea form-control lineA" placeholder="CURP...">
				<div class="input-group-append">
					<span class="input-group-text" id="basic-addon2">CURP 18 caracteres</span>
				</div>
			</div>

			<div class="form-group mf-form amber-textarea active-amber-textarea-2 input-group mb-3">
				<input type="text" name="rfc" value="{{old('rfc')}}" id="rfc" class="md-textarea form-control lineA" placeholder="RFC...">
				<div class="input-group-append">
					<span class="input-group-text" id="basic-addon2">RFC</span>
				</div>
			</div>

			<div class="form-group mf-form amber-textarea active-amber-textarea-2 input-group mb-3">
				<div class="input-group-append">
					<span class="input-group-text" id="basic-addon2">Estado</span>
				</div>			
				<select  name="estadoP" value="{{old('estadoP')}}" id="estadoP" class="md-textarea form-control lineA">
					<option value="aguascalientes">AGUASCALIENTES</option>
					<option value="bajacalifornia">BAJA CALIFORNIA</option>
					<option value="bajacaliforniasur">BAJA CALIFORNIA SUR</option>
					<option value="campeche">CAMPECHE</option>
					<option value="chiapas">CHIAPAS</option>
					<option value="chihuahua">CHIHUAHUA</option>
					<option value="coahuila">COAHUILA</option>
					<option value="colima">COLIMA</option>
					<option value="df">DISTRITO FEDERAL</option>
					<option value="durango">DURANGO</option>
					<option value="guanajuato">GUANAJUATO</option>
					<option value="guerrero">GUERRERO</option>
					<option value="hidalgo">HIDALGO</option>
					<option value="michoacan">MICHOACAN</option>
					<option value="morelos">MORELOS</option>
					<option value="nayarit">NAYARIT</option>
					<option value="nuevoleon">NUEVO LEON</option>
					<option value="oaxaca">OAXACA</option>
					<option value="puebla">PUEBLA</option>
					<option value="queretaro">QUERETARO</option>
					<option value="quintanaroo">QUINTANA ROO</option>
					<option value="sinaloa">SINALOA</option>
					<option value="sonora">SONORA</option>
					<option value="tabasco">TABASCO</option>
					<option value="tamaluipas">TAMAULIPAS</option>
					<option value="tlaxcala">TLAXCALA</option>
					<option value="veracruz">VERACURZ</option>
					<option value="yucatán">YUCATÁN</option>
					<option value="zacatecas">ZACATECAS</option>
				</select>
			</div>

			<div class="form-group mf-form amber-textarea active-amber-textarea-2 input-group mb-3">
			<div class="input-group-append">
					<span class="input-group-text" id="basic-addon2">MUNICIPIO</span>
				</div>
				<input type="text" name="municipio" value="{{old('municipio')}}" id="municipio" class="md-textarea form-control lineA" placeholder="MUNICIPIO...">
			</div>

			<div class="form-group mf-form amber-textarea active-amber-textarea-2 input-group mb-3">
				<input type="text" name="calle" value="{{old('calle')}}" id="calle" class="md-textarea form-control lineA" placeholder="CALLE...">
				<div class="input-group-append">
					<span class="input-group-text" id="basic-addon2">CALLE</span>
				</div>
			</div>

			<div class="form-group mf-form amber-textarea active-amber-textarea-2 input-group mb-3">
				<input type="text" name="colonia" value="{{old('colonia')}}" id="colonia" class="md-textarea form-control lineA" placeholder="COLONIA/LOCALIDAD...">
				<div class="input-group-append">
					<span class="input-group-text" id="basic-addon2">COLONIA/LOCALIDAD</span>
				</div>
			</div>
		
			<div class="form-group mf-form amber-textarea active-amber-textarea-2 input-group mb-3">	
			<div class="input-group-append">
					<span class="input-group-text" id="basic-addon2">Teléfono 10 Dígitos</span>
				</div>	
				<input type="tel" name="telefono" pattern="[0-9]{10}" value="{{old('telefono')}}" class="md-textarea form-control lineA" placeholder="Teléfono...">
			</div>

			<!--div class="form-group mf-form amber-textarea active-amber-textarea-2 input-group mb-3"-->
			<div class="input-group flex-nowrap">
				<div class="input-group-prepend">
					<!--small id="emailHelp" class="form-text text-muted"></small-->
					<span class="input-group-text" id="email">@</span>
				</div>
				<input type="text" name="email" value="{{old('email')}}" id="email" class="md-textarea form-control lineA" placeholder="Correo Electronico..." aria-label="Username" aria-describedby="addon-wrapping">
			</div><br>

			<!--div class="form-group mf-form amber-textarea active-amber-textarea-2 input-group mb-3 data">
				<input type="date" name="fecha_hora" value="{ {old('fecha_hora')}}" id="fecha_hora" class="md-textarea form-control lineA" placeholder="Fecha de Nacimiento...">
				<div class="input-group-append">
					<span class="input-group-text" id="basic-addon2">Fecha de Nacimiento</span>
				</div>
			</div-->

			<div><br><br><h3 class="text-center">Datos de Rastreabilidad</h3></div>
			<br>
			<div class="form-group mf-form amber-textarea active-amber-textarea-2 input-group mb-3">	
				<input type="text" name="certificacion" value="{{old('certificacion')}}" class="md-textarea form-control lineB" placeholder="Tipo de Certificación...">
				<div class="input-group-append">
					<span class="input-group-text" id="basic-addon2">Tipo de Certificación</span>
				</div>
			</div>

			<div class="form-group mf-form amber-textarea active-amber-textarea-2 input-group mb-3">
			<div class="input-group-append">
					<span class="input-group-text" id="basic-addon2">Clave de Rasteabilidad</span>
				</div>	
				<input type="text" name="clave_rast" value="{{old('clave_rast')}}" class="md-textarea form-control lineB" placeholder="Clave de Rasteabilidad...">

				<div class="input-group-append">
					<span class="input-group-text" id="basic-addon2">UPP</span>
				</div>
				<input type="text" name="upp" value="{{old('upp')}}" class="md-textarea form-control lineB" placeholder="UPP...">

				<div class="input-group-append">
					<span class="input-group-text" id="basic-addon2">PGN</span>
				</div>			
				<input type="text" name="pgn" value="{{old('pgn')}}" class="md-textarea form-control lineB" placeholder="PGN...">
			</div>	

			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 input-group mb-3 aol">
				<div class="input-group-prepend">
					<span class="input-group-text" id="basic-addon2 text-center" for="inputGroupSelect01">Temporada de Cosecha</span>
				</div>	
				<select name="temp_cosecha" value="{{old('temp_cosecha')}}" class="custom-select md-textarea form-control lineB" id="inputGroupSelect01">
					<option value="primavera">primavera</option>
					<option value="verano">verano</option>
					<option value="otoño">otoño</option>
					<option value="invierno">invierno</option>
				</select>
			</div>

			<div class="form-group mf-form amber-textarea active-amber-textarea-2 input-group mb-3">	
				<input type="text" name="prod_anual" value="{{old('prod_anual')}}" class="md-textarea form-control lineB" placeholder="Producción anual de miel...">
				<div class="input-group-append">
					<span class="input-group-text" id="basic-addon2">Producción Anual de Miel en Kg</span>
				</div>
			</div>

			<div class="form-group mf-form amber-textarea active-amber-textarea-2 input-group mb-3">
				<input type="text" name="num_colmena" value="{{old('num_colmena')}}" class="md-textarea form-control lineB" placeholder="Numero de Colmena o Chapetas...">			
				<div class="input-group-append">
					<span class="input-group-text" id="basic-addon2">Numeros de Colmenas o Chapetas</span>
				</div>
			</div>

			<div class="form-group mf-form amber-textarea active-amber-textarea-2 input-group mb-3">
				<div class="input-group-append">
					<span class="input-group-text" id="basic-addon2">Localización de los Apiarios</span>
				</div>
				<textarea rows="3" name="loc_api" value="{{old('loc_api')}}" class="form-control lineB" placeholder="Localización de los Apiarios..."></textarea>
			</div>

			<div class="form-group mf-form amber-textarea active-amber-textarea-2 input-group mb-3">
				<div class="input-group-append">
					<span class="input-group-text" id="basic-addon2">¿Mueve sus Colmenas?</span>
				</div>	 
				<div class="form-group mf-form amber-textarea active-amber-textarea-2 input-group mb-3">
					<button type="button" onclick="datoxx();" name="SI" class="btn btn-outline-primary btn-lg">SI</button>
								
					<button type="button" onclick="datox();" name="NO" class="btn btn-outline-danger btn-lg">NO</button>
				</div>
			</div>

			<div class="amber-textarea active-amber-textarea-2 aolq" id="datoy">
			<textarea rows="3" name="donde" value="{{old('donde')}}" class="form-control lineB" placeholder="¿A Dónde?..."></textarea>
				<div class="input-group-append">
					
				</div> 
			</div> 
			<br><br>

			<div class="form-group mf-form amber-textarea active-amber-textarea-2 input-group mb-3">	
			<textarea rows="3" name="observacion" value="{{old('observacion')}}" class="form-control lineB" placeholder="Observación..."></textarea>	
				<div class="input-group-append">
					<span class="input-group-text" id="basic-addon2">Observación</span>
				</div>
			</div>
			<div class="form-group mf-form amber-textarea active-amber-textarea-2">			
				<button class="btn btn-primary btn-block btn-lg" type="submit">Guardar</button><br>
				<button class="btn btn-danger btn-block btn-lg" type="reset">Cancelar</button>
			</div>
		</div>
		{!!Form::Close()!!}	
	</div> 
</div>
@endsection