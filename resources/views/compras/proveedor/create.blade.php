@extends ('layouts.admin')
@section ('contenido')
<!--div class="container-fluid"-->
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h3 class="text-center">Datos del Apicultor</h3>
			@if (count($errors)>0)
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

	{!!Form::open(array('url'=>'compras/proveedor','method'=>'POST','autocomplete'=>'off'))!!}
	{{Form::token()}}	
	<div class="row">
		
		<!--div class="form-group mf-form amber-textarea active-amber-textarea-2">
			<label for="nombre">Nombre</label>
			<input type="text" name="nombre" required value="{ {old('nombre')}}" class="md-textarea form-control lineA" placeholder="Ingrese el Nombre...">
		</div-->

		<div class="input-group ">
			<div class="input-group-prepend col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="form-group mf-form amber-textarea active-amber-textarea-2">
					<span class="input-group-text">Nombre y Apellidos</span>
				</div>
				<input type="text" name="nombre" required value="{{old('nombre')}}" class="md-textarea form-control lineA" placeholder="Nombre...">					
				<input type="text" name="apellidopa" required value="{{old('apellidopa')}}" class="md-textarea form-control lineA" placeholder="Apellido Parteno...">
				<input type="text" name="apellidoma" required value="{{old('apellidoma')}}" class="md-textarea form-control lineA" placeholder="Apellido Marteno...">
			</div>
		</div>

		<div class="input-group ">
			<div class="input-group-prepend col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<input type="text" name="direccion" value="{{old('direccion')}}" class="md-textarea form-control lineA" placeholder="Dirección...">
				<div class="form-group mf-form amber-textarea active-amber-textarea-2">
					<span class="input-group-text">Dirección</span>
				</div>
			</div>
		</div>

		<div class="input-group">
			<div class="input-group-prepend col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="form-group mf-form amber-textarea active-amber-textarea-2">
					<span class="input-group-text">CURP 18 Dígitos</span>
				</div>
				<input type="text" name="curp" value="{{old('curp')}}" id="curp" class="md-textarea form-control lineA" placeholder="CURP...">
			</div>
		</div>
			
		<div class="input-group">
			<div class="input-group-prepend col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<input type="text" name="telefono" value="{{old('telefono')}}" class="md-textarea form-control lineA" placeholder="Telefono...">
				<div class="form-group mf-form amber-textarea active-amber-textarea-2">
					<span class="input-group-text">Telefono</span>
				</div>
			</div>
		</div>

		<div class="input-group">
			<div class="input-group-prepend col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="form-group mf-form amber-textarea active-amber-textarea-2">
					<span class="input-group-text" id="email">@</span>										
				</div>
				<input type="text" name="email" value="{{old('email')}}" id="email" aria-describedby="email" class="md-textarea form-control lineA" placeholder="Correo Electronico...">
			</div>
		</div>

			<!--div class="form-group mf-form amber-textarea active-amber-textarea-2">
				<label for="img_curp">CURP</label>
				<input type="file" name="img_curp" value="{ {old('img_curp')}}" id="img_curp" class="md-textarea form-control lineA" placeholder="CURP...">
			</div-->

		<div>
			<br><br><h3 class="text-center">Datos de Rastreabilidad</h3>
		</div>

		<div class="form-group mf-form amber-textarea active-amber-textarea-2">
			<label for="tipo_certificacion">Tipo de Certificación</label>
			<input type="text" name="tipo_certificacion" value="{{old('tipo_certificacion')}}" class="md-textarea form-control lineB" placeholder="Tipo de Certificación...">
		</div>

		<div class="form-group mf-form amber-textarea active-amber-textarea-2">
			<label for="upp">UPP</label>
			<input type="text" name="upp" value="{{old('upp')}}" class="md-textarea form-control lineB" placeholder="UPP...">
		</div>

			<!--div class="form-group mf-form amber-textarea active-amber-textarea-2">
				<label for="img_upp">Imagen UPP</label>
				<input type="file" name="img_upp" value="{ {old('upp')}}" class="md-textarea form-control lineB" placeholder="IMAGEN DE UPP...">
			</div-->

		<div class="form-group mf-form amber-textarea active-amber-textarea-2">
			<label for="pgn">PGN</label>
			<input type="text" name="pgn" value="{{old('pgn')}}" class="md-textarea form-control lineB" placeholder="PGN...">
		</div>

			<!--div class="form-group mf-form amber-textarea active-amber-textarea-2">
				<label for="img_pgn">Imagen PGN</label>
				<input type="file" name="pgn" value="{{old('pgn')}}" class="md-textarea form-control lineB" placeholder="PGN...">
			</div-->

		<div class="form-group mf-form amber-textarea active-amber-textarea-2">
			<label for="clave_rast">Clave de Rasteabilidad</label>
			<input type="text" name="clave_rast" value="{{old('clave_rast')}}" class="md-textarea form-control lineB" placeholder="Clave de Rasteabilidad...">
		</div>

			<!--div class="form-group mf-form amber-textarea active-amber-textarea-2">
				<label for="img_clave_rast">Imagen Clave de Rasteabilidad</label>
				<input type="file" name="img_clave_rast" value="{ {old('img_clave_rast')}}" class="md-textarea form-control lineB" placeholder="Clave de Rasteabilidad...">
			</div-->

		<div class="form-group mf-form amber-textarea active-amber-textarea-2">
			<label for="prod_anual">Produccion anual</label>
			<input type="text" name="prod_anual" value="{{old('prod_anual')}}" class="md-textarea form-control lineB" placeholder="Produccion anual...">
		</div>

		<div class="form-group mf-form amber-textarea active-amber-textarea-2">
			<label for="num_colmena">Numero de Colmena</label>
			<input type="text" name="num_colmena" value="{{old('num_colmena')}}" class="md-textarea form-control lineB" placeholder="Numero de Colmena...">
		</div>

			<!--div class="form-group mf-form amber-textarea active-amber-textarea-2">
				<label for="img_perfil">Imagen de Perfil</label>
				<input type="file" name="img_perfil" value="{ {old('img_perfil')}}" class="md-textarea form-control lineB" placeholder="img_perfil...">
			</div-->

		<div>
			<br><br><h3 class="text-center">Datos de Rastreabilidad</h3>
		</div>

		<div>
			<table>
				<thead>
				</thead>
				<tbody>
				</tbody>
				<tfoot>
				</tfoot>
			</table>
		</div>
		<br><br>	
		<div class="form-group mf-form amber-textarea active-amber-textarea-2">
			<button class="btn btn-primary btn-block btn-lg" type="submit">Guardar</button>
			<br>
			<button class="btn btn-danger btn-block btn-lg" type="reset">Cancelar</button>
		</div>
	</div>
	{!!Form::Close()!!}	
@endsection