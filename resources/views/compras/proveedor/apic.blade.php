@extends ('layouts.admin')
@section ('contenido')
<div class="container-fluid"> 
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<br><br>
			<h3 class="text-center">Apiarios</h3>
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
				<input type="text" name="curp" pattern="[0-9,a-z,A-Z]{18}" value="{{old('curp')}}" id="curp" class="md-textarea form-control lineA" placeholder="CURP...">
				<div class="input-group-append">
					<span class="input-group-text" id="basic-addon2">CURP 18 caracteres</span>
				</div>
			</div>

			<div class="form-group mf-form amber-textarea active-amber-textarea-2 input-group mb-3">	
				<input type="text" name="direccion" value="{{old('direccion')}}" class="md-textarea form-control lineA" placeholder="Dirección...">
				<div class="input-group-append">
					<span class="input-group-text" id="basic-addon2">Dirección Completa</span>
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
			</div>

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

			<div class="form-group mf-form amber-textarea active-amber-textarea-2 input-group mb-3">	
				<input type="text" name="prod_anual" value="{{old('prod_anual')}}" class="md-textarea form-control lineB" placeholder="Producción anual...">
				<div class="input-group-append">
					<span class="input-group-text" id="basic-addon2">Producción Anual en Kg</span>
				</div>
				<input type="text" name="num_colmena" value="{{old('num_colmena')}}" class="md-textarea form-control lineB" placeholder="Numero de Colmena...">
				<div class="input-group-append">
					<span class="input-group-text" id="basic-addon2">Numeros de Colmenas</span>
				</div>
			</div>

			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 input-group mb-3 aol">
				<div class="input-group-prepend">
					<span class="input-group-text" id="basic-addon2 text-center" for="inputGroupSelect01">Temporada de Cosecha</span>
				</div>	
				<select class="custom-select" id="inputGroupSelect01">
					<option name="temp_cosecha" value="{{old('temp_cosecha')}}" class="md-textarea form-control lineB">primavera</option>
					<option name="temp_cosecha" value="{{old('temp_cosecha')}}" class="md-textarea form-control lineB">verano</option>
					<option name="temp_cosecha" value="{{old('temp_cosecha')}}" class="md-textarea form-control lineB">otoño</option>
					<option name="temp_cosecha" value="{{old('temp_cosecha')}}" class="md-textarea form-control lineB">invierno</option>
				</select>
			</div>

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