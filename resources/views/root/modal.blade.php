<?php/*
|--------------------------------------------------------------------------
| Vista modal
|--------------------------------------------------------------------------
| En esta vista llamamos al contenido de la vista modal y eliminamos el usuario
| de acuerdo con su identificado "id" y llama la funcion destroy del controlador 
| UsuarioController.
|
*/?>
<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1"
	id="modal-delete-{{$per->idpersona}}">
	<?php //#Inicio del formulario?>
	{{Form::Open(array('action'=>array('RootController@destroy',$per->idpersona),'method'=>'delete'))}}
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true" class="text-warning">X</span>
				</button>
				<h4 class="modal-title text-warning">Eliminar Apicultor</h4>
			</div>
			<div class="modal-body text-warning">
				<p>Confirme si desea Eliminar la Apicultor</p>
			</div>
			<div class="modal-footer py-3">
				<button type="button" class="btn btn-outline-warning" data-dismiss="modal">Cerrar</button>
				<button type="submit" class="btn btn-outline-danger">Confirmar</button>
			</div>
		</div>
	</div>
	<?php //#Fin del formulario?>
	{{Form::Close()}}
</div>