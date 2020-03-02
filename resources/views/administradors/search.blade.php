<?php/*
|--------------------------------------------------------------------------
| vista administradors/search
|--------------------------------------------------------------------------
| En la vista administradors/index se llama a esta vista que contiene un formulario
| de busqueda, que llama al controlador administradorsController que invoca la funcion
| padron, que retorna el resultado de la consulta a la vista administradors/index
*/?>
<?php //#Inicio del formulario?>
{!! Form::open(array('url'=>'administradors/padron','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}
<div class="form-group e-border text-center">
	<div class="input-group mx-auto">
		<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
			<div class="input-group-prepend">			
				<input type="text" class="e-border md-textarea form-control lineA btn btn-warning" name="searchText" placeholder="Buscar..." value="{{$searchText}}">
				<span class="text-center">		
					<button type="submit" class="btn btn-primary">Buscar</button>
				</span>
			</div>
		</div>
	</div>
</div>
<?php //#Fin del formulario?>
{{Form::close()}}