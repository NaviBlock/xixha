<?php/*
|--------------------------------------------------------------------------
| modulo Users
|--------------------------------------------------------------------------
| Esta modulo muestra un formulario de busqueda que llama el 
| controlador ApicultorController en la funcion padron y que retorna 
| el resultado de la consulta
*/?>
<!--#Bootstrap para ejecutar el modal-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!---------------------------------------------------------------------------------------------------->

<!-- #Iniciamos la llamada del formulario--->
{!! Form::open(array('url'=>'users/padron','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}
<div class="form-group e-border text-center">

	<div class="input-group mx-auto">
		<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
			<div class="input-group-prepend">
				<input type="text" class="e-border md-textarea form-control lineA btn btn-warning" name="searchText"
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
<!-- #Fin de la llamada del formulario -->
{{Form::close()}}