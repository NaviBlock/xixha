<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
	<div class="input-group mx-auto">
		<div class="mx-auto">
			<div class="input-group-prepend">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="modal-delete-{{$usu->id}}">
						{{Form::Open(array('action'=>array('UsuarioController@destroy',$usu->id),'method'=>'delete'))}}
						<div class="modal-dialog">
							<div class="modal-content">				
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true" class="text-primary">X</span>
									</button>
									<h4 class="modal-title py-3 text-primary">Eliminar Usuario</h4>
								</div>
								<div class="modal-body py-3 text-primary">
									<p>Confirme si desea Eliminar la Usuario</p>
								</div>
								<div class="modal-footer py-3">
									<button type="button" class="btn btn-outline-warning" data-dismiss="modal">Cerrar</button>
									<button type="submit" class="btn btn-outline-danger">Confirmar</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	{{Form::Close()}}
</div>