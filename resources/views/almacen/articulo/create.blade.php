@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h3 class="text-center">Nuevo Producto</h3>
			@if(count($errors)>0)
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{$error}}</li>
					@endforeach
				</ul> 
			</div>
		@endif
		{!!Form::open(array('url'=>'almacen/articulo','method'=>'POST','autocomplete'=>'off','files'=>'true'))!!}
		{{Form::token()}}
		<div class="form-group mf-form amber-textarea active-amber-textarea-2">
			<label for="nombre">Nombre</label>
			<input type="text" name="nombre" required value="{{old('nombre')}}" class="md-textarea form-control lineA">
		</div>
		<div class="form-group mf-form amber-textarea active-amber-textarea-2">
			<label>Categoría</label>
			<select name="idcategoria" class="form-control selectpicker lineA md-textarea" data-live-search="true">
				@foreach ($categorias as $cat)
					<option value="{{$cat->idcategoria}}">{{$cat->nombre}}</option>
				@endforeach
			</select>
		</div>
		<div class="form-group mf-form amber-textarea active-amber-textarea-2">
			<label for="codigo">Código</label>
			<input type="text" name="codigo" required value="{{old('codigo')}}" class="md-textarea form-control lineA">
		</div>			
		<div class="form-group mf-form amber-textarea active-amber-textarea-2">
			<label for="stock">Stock</label>
			<input type="text" name="stock" required value="{{old('stock')}}" class="md-textarea form-control lineA">
		</div>
		<div class="form-group mf-form amber-textarea active-amber-textarea-2">
			<label for="descripcion">Descripción</label>
			<input type="text" name="descripcion" required value="{{old('descripcion')}}" class="md-textarea form-control lineA">
		</div>
		<!--div class="form-group mf-form amber-textarea active-amber-textarea-2">
			<label for="imagen">Imagen</label>
			<input type="file" name="imagen" class="form-control">
		</div-->	

		<div class="form-group mf-form amber-textarea active-amber-textarea-2">
			<div class="file-field big">
				<a class="col-lg-12 col-md-12 col-sm-12 col-xs-12 btn-floating btn-lg amber darken-2 mt-0 float-left">
					<i class="fas fa-cloud-upload-alt" aria-hidden="true"></i>
					<label for="imagen">Imagen</label>
					<input type="file" multiple name="imagen" class="form-control md-form">
				</a>
			</div>
		</div><br><br><br><br><br><br>
		<button class="btn btn-primary btn-block" type="submit">Guardar</button><br>
		<button class="btn btn-danger btn-block" type="reset">Cancelar</button>
	</div>
{!!Form::Close()!!}		
@endsection 