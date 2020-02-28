<?php/*
|--------------------------------------------------------------------------
| vista root/search
|--------------------------------------------------------------------------
| En la vista secs/index se llama a esta vista que contiene un formulario
| de busqueda, que llama al controlador UsuarioController que invoca la funcion
| padron, que retorna el resultado de la consulta a la vista secs/index
*/?>
<?php //#Inicio del formulario?>
{!! Form::open(array('url'=>'root/padron','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}
<div class="form-group e-border text-center input-group input-group-prepend">
	<input type="text" class="e-color form-control text-center rounded-pill " name="searchText" placeholder="Buscar..."
		value="{{$searchText}}">
</div>
<div class="input-group mx-auto">
	<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
		<button type="submit" class="btn btn-primary text-center">Buscar</button>
	</div>
</div>
<?php //#Fin del formulario?>
{{Form::close()}}