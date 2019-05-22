@extends ('layouts.admin')
@section ('contenido')
	<div class = "row"> 
		<div class = "col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Proveedor Apicultor: {{ $persona->nombre}}</h3>
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
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
				<label for="nombre">Nombre</label>
				<input type="text" name="nombre" required value="{{$persona->nombre}}" class="form-control" placeholder="Ingrese el nombre...">
			</div>
		</div>
		
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
				<label for="direccion">Dirección</label>
				<input type="text" name="direccion" required value="{{$persona->direccion}}" class="form-control" placeholder="Direccion...">
			</div>			
		</div>
		
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
				<label for="docummento">Tipo de Documento</label>
				<select name="tipo_documento" class="form-control">
					@if($persona->tipo_documento=='RFC')
						<option value="RFC" selected>RFC</option>
						<option value="CURP">CURP</option>
						<option value="INR">INE</option>
					@elseif($persona->tipo_documento=='CURP')
						<option value="RFC">RFC</option>
						<option value="CURP" selected>CURP</option>
						<option value="INE">INE</option>
					@else
						<option value="RFC">RFC</option>
						<option value="CURP">CURP</option>
						<option value="INE" selected>INE</option>
					@endif
				</select>
			</div>
		</div>
		
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
				<label for="num_documento">Numero de Documento</label>
				<input type="text" name="num_documento" value="{{$persona->num_documento}}" class="form-control" placeholder="Numero de documento">
			</div>
		</div>

		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
				<label for="telefono">Telefono</label>
				<input type="text" name="telefono" value="{{$persona->telefono}}" class="form-control" placeholder="Numero de telefono">
			</div>
		</div>

		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
				<label for="email">Email</label>
				<input type="text" name="email" value="{{$persona->email}}" class="form-control" placeholder="Correo electronico...">
			</div>
		</div>
<!----------------------------------------------------------------------------------------------------------------------------------------->
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
				<label for="num_colmena">Numero de Colmena</label>
				<input type="text" name="num_colmena" value="{{$persona->num_colmena}}" class="form-control" placeholder="Numero de Colmena...">
			</div>
		</div>

		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
				<label for="geoloc_apiario">Geolocalización de Apiarios</label>
				<input type="text" name="geoloc_apiario" value="{{$persona->geoloc_apiario}}" class="form-control" placeholder="Geolocalización de Apiarios...">
			</div>
		</div>

		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
				<label for="prod_anual">Produccion anual</label>
				<input type="text" name="prod_anual" value="{{$persona->prod_anual}}" class="form-control" placeholder="Produccion anual...">
			</div>
		</div>

		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
				<label for="temp_cosecha">Temporada de Cosecha</label>
				<select name="temp_cosecha" class="form-control">
					@if($persona->temp_cosecha=='primavera')
						<option value="{{$persona->temp_cosecha}}" selected>primavera</option>
						<option value="{{$persona->temp_cosecha}}">verano</option>
						<option value="{{$persona->temp_cosecha}}">otoño</option>
						<option value="{{$persona->temp_cosecha}}">invierno</option>
					@elseif($persona->temp_cosecha=='verano')
						<option value="{{$persona->temp_cosecha}}">primavera</option>
						<option value="{{$persona->temp_cosecha}}" selected>verano</option>
						<option value="{{$persona->temp_cosecha}}">otoño</option>
						<option value="{{$persona->temp_cosecha}}">invierno</option>
					@elseif($persona->temp_cosecha=='otoño')
						<option value="{{$persona->temp_cosecha}}">primavera</option>
						<option value="{{$persona->temp_cosecha}}">verano</option>
						<option value="{{$persona->temp_cosecha}}" selected>otoño</option>
						<option value="{{$persona->temp_cosecha}}">invierno</option>
					@else
						<option value="{{$persona->temp_cosecha}}">primavera</option>
						<option value="{{$persona->temp_cosecha}}">verano</option>
						<option value="{{$persona->temp_cosecha}}">otoño</option>
						<option value="{{$persona->temp_cosecha}}" selected>invierno</option>
					@endif		
				</select>
			</div>
		</div>

		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
				<label for="tipo_certificacion">Tipo de Certificación</label>
				<input type="text" name="tipo_certificacion" value="{{$persona->tipo_certificacion}}" class="form-control" placeholder="Tipo de Certificación...">
			</div>
		</div>

		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
				<label for="mueve_sus_colmena">Mueves sus Colmena</label>
				<select name="mueve_sus_colmena" class="form-control">
					@if($persona->mueve_sus_colmena=='si')
						<option value="si" selected>si</option>
						<option value="no">no</option>
					@elseif($persona->mueve_sus_colmena=='no')
						<option value="si">si</option>
						<option value="no" selected>no</option>
					@endif
				</select>
			</div>
		</div>

		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
				<label for="a_donde">A Donde</label>
				<input type="text" name="a_donde" value="{{$persona->a_donde}}" class="form-control" placeholder="A Donde...">
			</div>
		</div>

		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
				<label for="observaciones">Observaciones</label>
				<input type="text" name="observaciones" value="{{$persona->observaciones}}" class="form-control" placeholder="Observaciones...">
			</div>
		</div>

		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
				<label for="upp">UPP</label>
				<input type="text" name="upp" value="{{$persona->upp}}" class="form-control" placeholder="UPP...">
			</div>
		</div>

		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
				<label for="pgn">PGN</label>
				<input type="text" name="pgn" value="{{$persona->pgn}}" class="form-control" placeholder="PGN...">
			</div>
		</div>

		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
				<label for="clave_rast">Clave de Rasteabilidad</label>
				<input type="text" name="clave_rast" value="{{$persona->clave_rast}}" class="form-control" placeholder="Clave de Rasteabilidad...">
			</div>
		</div>
<!----------------------------------------------------------------------------------------------------------------------------------------->
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
				<button class="btn btn-primary" type="submit">Guardar</button>
				<button class="btn btn-danger" type="reset">Cancelar</button>
			</div>
		</div>
	</div>
	{!!Form::Close()!!}		
@endsection