@extends ('layouts.admin')
@section ('contenido')
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h3 class="text-center">Alta de Apicultor</h3>
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
			<div class="form-group mf-form amber-textarea active-amber-textarea-2">
				<label for="nombre">Nombre</label>
				<input type="text" name="nombre" required value="{{old('nombre')}}" class="md-textarea form-control lineA" placeholder="Ingrese el Nombre...">
			</div>
	
			<div class="form-group mf-form amber-textarea active-amber-textarea-2">
				<label for="direccion">Dirección</label>
				<input type="text" name="direccion" value="{{old('direccion')}}" class="md-textarea form-control lineA" placeholder="Dirección...">
			</div>

			<div class="form-group mf-form amber-textarea active-amber-textarea-2">
				<label for="telefono">Telefono</label>
				<input type="text" name="telefono" value="{{old('telefono')}}" class="md-textarea form-control lineA" placeholder="Telefono...">
			</div>			

			<div class="form-group mf-form amber-textarea active-amber-textarea-2">
				<label for="email">Email</label>
				<input type="text" name="email" value="{{old('email')}}" id="email" aria-describedby="email" class="md-textarea form-control lineA" placeholder="Correo Electronico...">
			</div>
			
			<div class="form-group mf-form amber-textarea active-amber-textarea-2">
				<label for="curp">CURP</label>
				<input type="text" name="curp" value="{{old('curp')}}" id="curp" class="md-textarea form-control lineA" placeholder="CURP...">
			</div>

			<div class="form-group mf-form amber-textarea active-amber-textarea-2">
				<label for="img_curp">CURP</label>
				<input type="file" name="img_curp" value="{{old('img_curp')}}" id="img_curp" class="md-textarea form-control lineA" placeholder="CURP...">
			</div>

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

			<div class="form-group mf-form amber-textarea active-amber-textarea-2">
				<label for="img_upp">Imagen UPP</label>
				<input type="file" name="img_upp" value="{{old('upp')}}" class="md-textarea form-control lineB" placeholder="IMAGEN DE UPP...">
			</div>

			<div class="form-group mf-form amber-textarea active-amber-textarea-2">
				<label for="pgn">PGN</label>
				<input type="text" name="pgn" value="{{old('pgn')}}" class="md-textarea form-control lineB" placeholder="PGN...">
			</div>

			<div class="form-group mf-form amber-textarea active-amber-textarea-2">
				<label for="img_pgn">Imagen PGN</label>
				<input type="file" name="pgn" value="{{old('pgn')}}" class="md-textarea form-control lineB" placeholder="PGN...">
			</div>

			<div class="form-group mf-form amber-textarea active-amber-textarea-2">
				<label for="clave_rast">Clave de Rasteabilidad</label>
				<input type="text" name="clave_rast" value="{{old('lave_rast')}}" class="md-textarea form-control lineB" placeholder="Clave de Rasteabilidad...">
			</div>

			<div class="form-group mf-form amber-textarea active-amber-textarea-2">
				<label for="clave_rast">Imagen Clave de Rasteabilidad</label>
				<input type="file" name="clave_rast" value="{{old('lave_rast')}}" class="md-textarea form-control lineB" placeholder="Clave de Rasteabilidad...">
			</div>
			<div class="form-group mf-form amber-textarea active-amber-textarea-2">
				<label for="prod_anual">Produccion anual</label>
				<input type="text" name="prod_anual" value="{{old('prod_anual')}}" class="md-textarea form-control lineB" placeholder="Produccion anual...">
			</div>

			<div class="form-group mf-form amber-textarea active-amber-textarea-2">
				<label for="num_colmena">Numero de Colmena</label>
				<input type="text" name="num_colmena" value="{{old('num_colmena')}}" class="md-textarea form-control lineB" placeholder="Numero de Colmena...">
			</div>

			<div class="form-group mf-form amber-textarea active-amber-textarea-2">
				<label for="img_perfil">Imagen de Perfil</label>
				<input type="file" name="img_perfil" value="{{old('img_perfil')}}" class="md-textarea form-control lineB" placeholder="img_perfil...">
			</div>

			<br><br>	
			<div class="form-group mf-form amber-textarea active-amber-textarea-2">
				<button class="btn btn-primary btn-block btn-lg" type="submit">Guardar</button>
				<br>
				<button class="btn btn-danger btn-block btn-lg" type="reset">Cancelar</button>
			</div>
		</div>
		{!!Form::Close()!!}	
	</div> 
</div>
@endsection