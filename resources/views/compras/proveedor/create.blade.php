@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h3 class="text-center">Registro del Nuevo Apicultor</h3>
			@if (count($errors)>0)
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{$error}}</li>
						@endforeach
					</ul> 
				</div>
			@endif 
		{!!Form::open(array('url'=>'compras/proveedor','method'=>'POST','autocomplete'=>'off','files'=>'true'))!!}
		{{Form::token()}}
			<div class="row">
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
					<div class="form-group mf-form amber-textarea active-amber-textarea-2">
						<label for="nombre">Nombre</label>
						<input type="text" name="nombre" required value="{{old('nombre')}}" class="md-textarea form-control lineA" placeholder="Ingrese el Nombre...">
					</div>
				</div>

				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
					<div class="form-group">
						<label for="direccion">Dirección</label>
						<input type="text" name="direccion" value="{{old('direccion')}}" class="form-control" placeholder="Dirección...">
					</div>
				</div>

				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
					<div class="form-group">
						<label>Tipo de Documento</label>
						<select name="tipo_documento" class="form-control  selectpicker" data-live-search="true">
							<option value="RFC">RFC</option>
							<option value="CURP">CURP</option>
							<option value="INE">INE</option>
						</select>
					</div>
				</div>

				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
					<div class="form-group">
						<label for="num_documento">Numero de documento</label>
						<input type="text" name="num_documento" value="{{old('num_documento')}}" class="form-control" placeholder="Numero del Documento...">
					</div>
				</div>

				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
					<div class="form-group">
						<label for="telefono">Telefono</label>
						<input type="text" name="telefono" value="{{old('telefono')}}" class="form-control" placeholder="Telefono...">
					</div>			
				</div>
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
					<div class="form-group">
						<label for="email">Email</label>
						<input type="text" name="email" value="{{old('email')}}" class="form-control" placeholder="Correo Electronico...">
					</div>
				</div>

				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
						<div class="form-group">
							<label for="num_colmena">Numero de Colmena</label>
							<input type="text" name="num_colmena" value="{{old('num_colmena')}}" class="form-control" placeholder="Numero de Colmena...">
						</div>
					</div>
					<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
						<div class="form-group">
							<label for="geoloc_apiario">Geolocalización de Apiarios</label>
							<input type="text" name="geoloc_apiario" value="{{old('geoloc_apiario')}}" class="form-control" placeholder="Geolocalización de Apiarios...">
						</div>
					</div>
					<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
						<div class="form-group">
							<label for="prod_anual">Produccion anual</label>
							<input type="text" name="prod_anual" value="{{old('prod_anual')}}" class="form-control" placeholder="Produccion anual...">
						</div>
					</div>
					<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
						<div class="form-group">
							<label>Temporada de Cosech</label>
							<select name="temp_cosecha" class="form-control selectpicker" data-live-search="true">
								<option value="primavera">primavera</option>
								<option value="verano">verano</option>
								<option value="otoño">otoño</option>
								<option value="invierno">invierno</option>
							</select>
						</div>
					</div>
					<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
						<div class="form-group">
							<label for="tipo_certificacion">Tipo de Certificación</label>
							<input type="text" name="tipo_certificacion" value="{{old('tipo_certificacion')}}" class="form-control" placeholder="Tipo de Certificación...">
						</div>
					</div>
					<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
						<div class="form-group">
							<label>Mueves sus Colmena</label>
							<select name="mueve_sus_colmena" class="form-control selectpicker" data-live-search="true">
								<option value="si">si</option>
								<option value="no">no</option>
							</select>
						</div>
					</div>
					<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
						<div class="form-group">
							<label for="a_donde">A Donde</label>
							<input type="text" name="a_donde" value="{{old('a_donde')}}" class="form-control" placeholder="A Donde...">
						</div>
					</div>
					<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
						<div class="form-group">
							<label for="observaciones">Observaciones</label>
							<input type="text" name="observaciones" value="{{old('observaciones')}}" class="form-control" placeholder="Observaciones...">
						</div>
					</div>
					<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
						<div class="form-group">
							<label for="upp">UPP</label>
							<input type="text" name="upp" value="{{old('upp')}}" class="form-control" placeholder="UPP...">
						</div>
					</div>
					<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
						<div class="form-group">
							<label for="pgn">PGN</label>
							<input type="text" name="pgn" value="{{old('pgn')}}" class="form-control" placeholder="PGN...">
						</div>
					</div>
					<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
						<div class="form-group">
							<label for="clave_rast">Clave de Rasteabilidad</label>
							<input type="text" name="clave_rast" value="{{old('lave_rast')}}" class="form-control" placeholder="Clave de Rasteabilidad...">
						</div>
					</div>
					<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
						<div class="form-group">
							<button class="btn btn-primary" type="submit">Guardar</button>
							<button class="btn btn-danger" type="reset">Cancelar</button>
						</div>
					</div>
				</div>
			{!!Form::Close()!!}	
		</div> 
	</div> 	
@endsection