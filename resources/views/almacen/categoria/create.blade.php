@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h3 class="text-center">Nuevas Categoria Xixhá</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul> 
			</div> 
			@endif
			{!!Form::open(array('url'=>'almacen/categoria','method'=>'POST','autocomplete'=>'off'))!!}
			{{Form::token()}}
            <div class="form-group md-form amber-textarea active-amber-textarea-2">
            	<label for="nombre">Nombre</label>
            	<input type="text" name="nombre" required value="{{old('nombre')}}" class="md-textarea form-control lineA">
            </div>
			<div class="form-group md-form amber-textarea active-amber-textarea-2">
				<label for="descripcion">Descripción</label>
  				<textarea id="descripcion" class="md-textarea form-control" rows="4	" required value="{{old('descripcion')}}" name="descripcion"></textarea>
			</div>
		</div><br><br><br><br><br><br>
		<div class="container-fluid">
			<button class="btn btn-primary btn-block" type="submit">Guardar</button><br>
			<button class="btn btn-danger btn-block" type="reset">Cancelar</button>
		</div>
	</div>
{!!Form::Close()!!}		
@endsection