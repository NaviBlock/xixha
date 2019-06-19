@extends ('layouts.admin')
@section ('contenido')
	<div class = "row"> 
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<h3>Datos del Apicultor: {{$persona->nombre}}</h3>
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
					<span class="input-group-text" id="basic-addon2">Folio: {{$persona->nombre}}." ".{{$persona->apellidopa}}." ".{{$persona->apellidoma}}</span><br>
				</div>
				<input type="text" name="folio" value="{{$persona->folio}}" disabled ="true" class="md-textarea form-control lineA" aria-describedby="basic-addon2">
			</div>
		</div>
			
		<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
			<div class="form-group mf-form amber-textarea active-amber-textarea-2 input-group mb-3">
				<input type="text" name="estadoP" value="{{$persona->estadoP}}" disabled ="true" class="md-textarea form-control lineA" aria-describedby="basic-addon2">
				<div class="input-group-append">
					<span class="input-group-text" id="basic-addon2">Estado</span><br>
				</div>

				<input type="text" name="municipio" value="{{$persona->municipio}}" disabled ="true" class="md-textarea form-control lineA" aria-describedby="basic-addon2">
				<div class="input-group-append">
					<span class="input-group-text" id="basic-addon2">Municipio</span><br>
				</div>

				<input type="text" name="colonia" value="{{$persona->colonia}}" disabled ="true" class="md-textarea form-control lineA" aria-describedby="basic-addon2">
				<div class="input-group-append">
					<span class="input-group-text" id="basic-addon2">Colonia</span><br>
				</div>

				<input type="text" name="calle" value="{{$persona->calle}}" disabled ="true" class="md-textarea form-control lineA" aria-describedby="basic-addon2">
				<div class="input-group-append">
					<span class="input-group-text" id="basic-addon2">Calle</span><br>
				</div>
			</div>			
		</div>

		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group mf-form amber-textarea active-amber-textarea-2 input-group mb-3">
				<input type="text" name="telefono" value="{{$persona->telefono}}" disabled ="true" class="md-textarea form-control lineA" aria-describedby="basic-addon2">
				<div class="input-group-append">
					<span class="input-group-text" id="basic-addon2">Telefono</span><br>
				</div>
			</div>
		</div>

		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group mf-form amber-textarea active-amber-textarea-2 input-group mb-3">
				<input type="text" name="sexo" value="{{$persona->sexo}}" disabled ="true" class="md-textarea form-control lineA" aria-describedby="basic-addon2">
				<div class="input-group-append">
					<span class="input-group-text" id="basic-addon2">SEXO</span><br>
				</div>
			</div>
		</div>

	
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group mf-form amber-textarea active-amber-textarea-2 input-group mb-3">
				<input type="text" name="email" value="{{$persona->email}}" disabled ="true" class="md-textarea form-control lineA" aria-describedby="basic-addon2">
					<div class="input-group-append">
						<span class="input-group-text" id="basic-addon2">Correo electronico</span><br>
					</div>
			</div>
		</div>
	
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group mf-form amber-textarea active-amber-textarea-2 input-group mb-3">
				<input type="text" name="curp" value="{{$persona->curp}}" disabled ="true" class="md-textarea form-control lineA" aria-describedby="basic-addon2">
					<div class="input-group-append">
						<span class="input-group-text" id="basic-addon2">CURP</span><br>
					</div>
			</div>
		</div>

		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group mf-form amber-textarea active-amber-textarea-2 input-group mb-3">
				<input type="text" name="rfc" value="{{$persona->rfc}}" disabled ="true" class="md-textarea form-control lineA" aria-describedby="basic-addon2">
					<div class="input-group-append">
						<span class="input-group-text" id="basic-addon2">RFC</span><br>
					</div>
			</div>
		</div>
	
		<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
			<br><h3 class="text-center">Datos de Rastreabilidad</h3><br>
		</div>

		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group mf-form amber-textarea active-amber-textarea-2 input-group mb-3">
				<div class="input-group-append">
					<span class="input-group-text" id="basic-addon2">Folio</span><br>
				</div>
				<input type="text" name="folio" value="{{$persona->folio}}" disabled ="true" class="md-textarea form-control lineA" aria-describedby="basic-addon2">
			</div>
		</div>

		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group mf-form amber-textarea active-amber-textarea-2 input-group mb-3">
				<input type="text" name="certificacion" value="{{$persona->certificacion}}" disabled ="true" class="md-textarea form-control lineA" aria-describedby="basic-addon2">
				<div class="input-group-append">
					<span class="input-group-text" id="basic-addon2">Tipo de Certificación</span><br>
				</div>
			</div>
		</div>

		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group mf-form amber-textarea active-amber-textarea-2 input-group mb-3">
				<input type="text" name="temp_cosecha" value="{{$persona->temp_cosecha}}" disabled ="true" class="md-textarea form-control lineA" aria-describedby="basic-addon2">
				<div class="input-group-append">
					<span class="input-group-text" id="basic-addon2">Temporada de Cosecha</span><br>
				</div>
			</div>
		</div> 

		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group mf-form amber-textarea active-amber-textarea-2 input-group mb-3">
				<div class="input-group-append">
					<span class="input-group-text" id="basic-addon2">Numeros de Colmenas o Chapetas</span>
				</div>
				<input type="text" name="num_colmena" value="{{$persona->num_colmena}}" disabled ="true" class="md-textarea form-control lineA" aria-describedby="basic-addon2">
			</div>
		</div>
	
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group mf-form amber-textarea active-amber-textarea-2 input-group mb-3">
				<div class="input-group-append">
					<span class="input-group-text" id="basic-addon2">UPP</span><br>
				</div>
				<input type="text" name="upp" value="{{$persona->upp}}" disabled ="true" class="md-textarea form-control lineA" aria-describedby="basic-addon2">
			</div>
		</div> 
		
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group mf-form amber-textarea active-amber-textarea-2 input-group mb-3">
			<input type="text" name="pgn" value="{{$persona->pgn}}" disabled ="true" class="md-textarea form-control lineA" aria-describedby="basic-addon2">
				<div class="input-group-append">
					<span class="input-group-text" id="basic-addon2">PGN</span><br>
				</div>
			</div>
		</div>
	
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group mf-form amber-textarea active-amber-textarea-2 input-group mb-3">
				<input type="text" name="prod_anual" value="{{$persona->prod_anual}}" disabled ="true" class="md-textarea form-control lineA" aria-describedby="basic-addon2">
				<div class="input-group-append">
					<span class="input-group-text" id="basic-addon2">Produccion anual</span><br>
				</div>
			</div>
		</div>  
		
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group mf-form amber-textarea active-amber-textarea-2 input-group mb-3">
				<div class="input-group-append">
					<span class="input-group-text" id="basic-addon2">Clave de Rasteabilidad</span><br>
				</div>
				<input type="text" name="clave_rast" value="{{$persona->clave_rast}}" disabled ="true" class="md-textarea form-control lineA" aria-describedby="basic-addon2">
			</div>
		</div>

		<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
			<div class="form-group mf-form amber-textarea active-amber-textarea-2 input-group mb-3">
				<div class="input-group-append">
					<span class="input-group-text" id="basic-addto2">Localización de los Apiarios</span><br>
				</div>	
				<input type="text" name="loc_api" value="{{$persona->loc_api}}" disabled ="true" class="md-textarea form-control lineA" aria-describedby="basic-addto2">
			</div>
		</div>

		<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
			<div class="form-group mf-form amber-textarea active-amber-textarea-2 input-group mb-3">
				<div class="input-group-append">
					<span class="input-group-text" id="basic-addon2">Observación</span><br>
				</div>
				<input type="text" name="observacion" value="{{$persona->observacion}}" disabled ="true" class="md-textarea form-control lineA" aria-describedby="basic-addon2">
			</div>
		</div>

		<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
			<div class="form-group mf-form amber-textarea active-amber-textarea-2 input-group mb-3">
				<label for="img_perfil">Imagen de Perfil</label>
				<input type="file" name="img_perfil" value="{{$persona->img_perfil}}" disabled ="true" class="md-textarea form-control lineB" aria-describedby="basic-addon2">
			</div>
		</div>	
		</div>
	</div>
	{!!Form::Close()!!}		
@endsection