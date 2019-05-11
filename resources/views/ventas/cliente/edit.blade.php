@extends ('layouts.admin')
@section ('contenido')
	<div class = "row">
		<div class = "col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Cliente: {{ $persona->nombre}}</h3>
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

	{!!Form::model($persona,['method'=>'PATCH','route'=>['ventas.cliente.update',$persona->idpersona]]) !!}
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
					@if($persona->tipo_documento=='rfc')
						<option value="rfc" selected>RFC</option>
						<option value="curp">CURP</option>
						<option value="ine">INE</option>
					@elseif($persona->tipo_documento=='curp')
						<option value="rfc">RFC</option>
						<option value="curp" selected>CURP</option>
						<option value="ine">INE</option>
					@else
						<option value="rfc">RFC</option>
						<option value="curp">CURP</option>
						<option value="ine" selected>INE</option>
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

		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
				<button class="btn btn-primary" type="submit">Guardar</button>
				<button class="btn btn-danger" type="reset">Cancelar</button>
			</div>
		</div>
	</div>
	{!!Form::close()!!}		
@endsection