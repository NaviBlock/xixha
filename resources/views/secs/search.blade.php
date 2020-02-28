<?php/*
|--------------------------------------------------------------------------
| vista secs/search
|--------------------------------------------------------------------------
| En la vista secs/index se llama a esta vista que contiene un formulario
| de busqueda, que llama al controlador UsuarioController que invoca la funcion
| padron, que retorna el resultado de la consulta a la vista secs/index
*/?>
<?php //#Inicio del formulario?>
{!! Form::open(array('url'=>'secs','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}
<div class="form-group e-border text-center">
	<div class="input-group mx-auto">
		<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
			<div class="input-group-prepend">
				<input type="text" class="e-border md-textarea form-control linieA btn btn-warning" name="searchText"
					placeholder="Buscar..." value="{{$searchText}}">
			</div>
		</div>
	</div><br>
	<div class="input-group mx-auto">
		<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
			<span class="text-center">
				<button type="submit" class="btn btn-primary">Buscar</button>
			</span>
		</div>
	</div>
</div>
<?php //#Fin del formulario?>
{{Form::close()}}