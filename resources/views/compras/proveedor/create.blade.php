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
			{!!Form::open(array('url'=>'compras/proveedor','method'=>'POST','autocomplete'=>'off','files'=>'true','enctype'=>'multipart/form-data'))!!}
			{{Form::token()}}	
			
			<div class="form-group mf-form amber-textarea active-amber-textarea-2 input-group mb-3">			
				<span class="input-group-text" id="basic-addon2">Imagen de Perfil</span>
				<input type="file" name="img_perfil" value="{{('img_perfil')}}" class="md-textarea form-control lineA" placeholder="img_perfil...">
			</div>

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
					<option value="HOMBRE">HOMBRE</option>
					<option value="MUJER">MUJER</option>
				</select>
			</div>

			<div class="form-group mf-form amber-textarea active-amber-textarea-2 input-group mb-3">
				<input type="text" name="curp" pattern="[0-9a-zA-Z]{18}"  value="{{old('curp')}}" id="curp" class="md-textarea form-control lineA" placeholder="CURP...">
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
					<option value="PRIMAVERA">PRIMAVERA</option>
					<option value="VERANO">VERANO</option>
					<option value="OTOÑO">OTOÑO</option>
					<option value="INVIERNO">INVIERNO</option>
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
				<div class="form-group mf-form amber-textarea active-amber-textarea-2 input-group mb-3" selected>

					<button type="button" onclick="datoxx();" value="{('mov_loc')}}" name="SI" class="btn btn-outline-primary btn-lg">SI</button>			
					<button type="button" onclick="datox();" value="{('mov_loc')}" name="NO" class="btn btn-outline-danger btn-lg">NO</button>
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