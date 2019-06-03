@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class = "col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h3 class="text-center">Editar Categoría: {{$categoria->nombre}}</h3>
			@if (count($errors)>0)
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{$error}}</li>
						@endforeach
					</ul>
				</div>
			@endif
			{!!Form::model($categoria,['method'=>'PATCH','route'=>['almacen.categoria.update',$categoria->idcategoria]])!!}
			{{Form::token()}}
			<div class="form-group md-form amber-textarea active-amber-textarea-2">
				<label for="nombre">Nombre</label>
				<input type="text" name="nombre" class="md-textarea form-control lineA" placeholder='{{$categoria->nombre}}'>
			</div>
			<div class="form-group md-form amber-textarea active-amber-textarea-2">
				<label for="descripcion">Descripción</label>
				<textarea id="descripcion" class="md-textarea form-control" rows="4	" name="descripcion" placeholder='{{$categoria->descripcion}}'></textarea>
			</div><br><br><br><br><br><br>
			<div class="container-fluid">
				<button class="btn btn-primary btn-block" type="submit">Guardar</button><br>
				<button class="btn btn-danger btn-block" type="reset">Cancelar</button>
			</div>
		</div>
	</div>
	{!!Form::Close()!!}		
@endsection