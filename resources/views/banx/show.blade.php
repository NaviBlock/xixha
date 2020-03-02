<?php/*
|--------------------------------------------------------------------------
| Vista banx/show
|--------------------------------------------------------------------------
| En esta vista llamamos un formulario que contiene informacion del banx,
| Este proceso se obtiene la realizar una consulta en el controlador BanxController 
| 
*/?>
<?php //#llamada de la vista layouts.adminuser?>
@extends ('layouts.adminuser')
<?php //#Inicio del contenido de esta vista ?>
@section ('contenido')
<div class="row">
	<div class="container-fluid">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto">
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
</div>
<?php //#Inicio del formulario?>
{!!Form::model($persona,['method'=>'PATCH','route'=>['users.update',$persona->idpersona]]) !!}
<?php //#Token de seguridad que se aplica al formulario?>
{{Form::token()}}

<div class="container-fluid">
	<div class="row">
		<div class="main col-md-12 ml-sm-auto col-lg-12 py-4">

			<!---Titulo---->
			<div class="text-center">
				<h3 class="e-text-color">Datos Personales del Apicultor</h3>
			</div>

			<!---Nombre del apicultor---->
			<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center ">
				<div class="input-group mx-auto">
					<div class="input-group-prepend">
						<span class="text-center input-group-text btn btn-warning" id="basic-addon101">Folio de:
							{{$persona->nombre}} {{$persona->apellidopa}} {{$persona->apellidoma}}</span>
						<input type="text" name="folio" value="{{$persona->folio}}" disabled="true"
							class="input-group-text e-border md-textarea form-control lineA"
							aria-describedby="basic-addon101">
					</div>
				</div>
			</div>

			<!---Estado---->
			<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
				<div class="input-group mx-auto">
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
						<div class="input-group-prepend">
							<span class="text-center input-group-text btn btn-warning" id="basic-addon102">Estado</span>
							<input type="text" name="estadoP" value="{{$persona->estadoP}}" disabled="true"
								class="e-border md-textarea form-control lineA btn btn-warning"
								aria-describedby="basic-addon102">
						</div>
					</div>
				</div>
			</div>

			<!--Municipio-->
			<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
				<div class="input-group mx-auto">
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
						<div class="input-group-prepend">
							<span class="text-center input-group-text btn btn-warning"
								id="basic-addon103">Municipio</span>
							<input type="text" name="municipio" value="{{$persona->municipio}}" disabled="true"
								class="e-border md-textarea form-control lineA btn btn-warning"
								aria-describedby="basic-addon103">
						</div>
					</div>
				</div>
			</div>

			<!--Colonia-->
			<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
				<div class="input-group mx-auto">
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
						<div class="input-group-prepend">
							<span class="text-center input-group-text btn btn-warning"
								id="basic-addon104">Colonia</span>
							<input type="text" name="colonia" value="{{$persona->colonia}}" disabled="true"
								class="e-border md-textarea form-control lineA btn btn-warning"
								aria-describedby="basic-addon104">
						</div>
					</div>
				</div>
			</div>

			<!--Calle-->
			<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
				<div class="input-group mx-auto">
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
						<div class="input-group-prepend">
							<span class="text-center input-group-text btn btn-warning" id="basic-addon105">Calle</span>
							<input type="text" name="calle" value="{{$persona->calle}}" disabled="true"
								class="e-border md-textarea form-control lineA btn btn-warning"
								aria-describedby="basic-addon105">
						</div>
					</div>
				</div>
			</div>

			<!--Telefono--->
			<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
				<div class="input-group mx-auto">
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
						<div class="input-group-prepend">
							<span class="text-center input-group-text btn btn-warning"
								id="basic-addon106">Telefono</span>
							<input type="text" name="telefono" value="{{$persona->telefono}}" disabled="true"
								class="e-border md-textarea form-control lineA btn btn-warning"
								aria-describedby="basic-addon106">
						</div>
					</div>
				</div>
			</div>

			<!--Email-->
			<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
				<div class="input-group mx-auto">
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
						<div class="input-group-prepend">
							<span class="text-center input-group-text btn btn-warning" id="basic-addon107">Correo
								electronico</span>
							<input type="text" name="email" value="{{$persona->email}}" disabled="true"
								class="e-border md-textarea form-control lineA btn btn-warning"
								aria-describedby="basic-addon107">
						</div>
					</div>
				</div>
			</div>

			<!--Sexo-->
			<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
				<div class="input-group mx-auto">
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
						<div class="input-group-prepend">
							<span class="text-center input-group-text btn btn-warning" id="basic-addon108">SEXO</span>
							<input type="text" name="sexo" value="{{$persona->sexo}}" disabled="true"
								class="e-border md-textarea form-control lineA btn btn-warning"
								aria-describedby="basic-addon108">
						</div>
					</div>
				</div>
			</div>

			<!--CURP-->
			<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
				<div class="input-group mx-auto">
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
						<div class="input-group-prepend">
							<span class="input-group-text btn btn-warning text-center" id="basic-addon110">CURP</span>
							<input type="text" name="curp" value="{{$persona->curp}}" disabled="true"
								class="e-border md-textarea form-control lineA btn btn-warning"
								aria-describedby="basic-addon109">
						</div>
					</div>
				</div>
			</div>

			<!--RFC-->
			<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
				<div class="input-group mx-auto">
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
						<div class="input-group-prepend">
							<span class="input-group-text btn btn-warning text-center" id="basic-addon2">RFC</span>
							<input type="text" name="rfc" value="{{$persona->rfc}}" disabled="true"
								class="e-border md-textarea form-control lineA btn btn-warning"
								aria-describedby="basic-addon110">
						</div>
					</div>
				</div>
			</div>

			<!--Titulo de Rastreabilidad-->
			<br><br><br>
			<div
				class="col-lg-6 col-md-6 col-sm-6 col-xs-6 offset-lg-3 offset-md-3 offset-sm-3 offset-xs-3 text-center">
				<h3 class="e-text-color">Datos de Rastreabilidad</h3><br><br>
			</div>


			<!--Folio-->
			<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
				<div class="input-group mx-auto">
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
						<div class="input-group-prepend">
							<span class="input-group-text btn btn-warning text-center" id="basic-addon111">Folio</span>
							<input type="text" name="folio" value="{{$persona->folio}}" disabled="true"
								class="e-border md-textarea form-control lineA btn btn-warning"
								aria-describedby="basic-addon111">
						</div>
					</div>
				</div>
			</div>

			<!--Tipo-->
			<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
				<div class="input-group mx-auto">
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
						<div class="input-group-prepend">
							<span class="input-group-text btn btn-warning text-center" id="basic-addon112">Tipo de
								Certificación</span>
							<input type="text" name="certificacion" value="{{$persona->certificacion}}" disabled="true"
								class="e-border md-textarea form-control lineA btn btn-warning"
								aria-describedby="basic-addon112">
						</div>
					</div>
				</div>
			</div>

			<!--Temporada de Cosecha--->
			<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
				<div class="input-group mx-auto">
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
						<div class="input-group-prepend">
							<span class="input-group-text btn btn-warning text-center" id="basic-addon113">Temporada de
								Cosecha</span>
							<input type="text" name="temp_cosecha" value="{{$persona->temp_cosecha}}" disabled="true"
								class="e-border md-textarea form-control lineA btn btn-warning"
								aria-describedby="basic-addon113">
						</div>
					</div>
				</div>
			</div>

			<!--N°-->
			<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
				<div class="input-group mx-auto">
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
						<div class="input-group-prepend">
							<span class="input-group-text btn btn-warning text-center" id="basic-addon114">N° Colmenas,
								Chapetas</span>
							<input type="text" name="num_colmena" value="{{$persona->num_colmena}}" disabled="true"
								class="e-border md-textarea form-control lineA btn btn-warning"
								aria-describedby="basic-addon114">
						</div>
					</div>
				</div>
			</div>


			<!--UPP-->
			<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
				<div class="input-group mx-auto">
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
						<div class="input-group-prepend">
							<span class="input-group-text btn btn-warning text-center" id="basic-addon115">UPP</span>
							<input type="text" name="upp" value="{{$persona->upp}}" disabled="true"
								class="e-border md-textarea form-control lineA btn btn-warning"
								aria-describedby="basic-addon115">
						</div>
					</div>
				</div>
			</div>

			<!--PGN-->
			<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
				<div class="input-group mx-auto">
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
						<div class="input-group-prepend">
							<span class="input-group-text btn btn-warning text-center" id="basic-addon116">PGN</span>
							<input type="text" name="pgn" value="{{$persona->pgn}}" disabled="true"
								class="e-border md-textarea form-control lineA btn btn-warning"
								aria-describedby="basic-addon116">
						</div>
					</div>
				</div>
			</div>

			<!--Producción-->
			<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
				<div class="input-group mx-auto">
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
						<div class="input-group-prepend">
							<span class="input-group-text btn btn-warning text-center" id="basic-addon117">Producción
								anual</span>
							<input type="text" name="prod_anual" value="{{$persona->prod_anual}}" disabled="true"
								class="e-border md-textarea form-control lineA btn btn-warning"
								aria-describedby="basic-addon117">
						</div>
					</div>
				</div>
			</div>

			<!--Clave-->
			<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
				<div class="input-group mx-auto">
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
						<div class="input-group-prepend">
							<span class="input-group-text btn btn-warning text-center" id="basic-addon118">Clave de
								Rasteabilidad</span>
							<input type="text" name="clave_rast" value="{{$persona->clave_rast}}" disabled="true"
								class="e-border md-textarea form-control lineA btn btn-warning"
								aria-describedby="basic-addon118">
						</div>
					</div>
				</div>
			</div>

			<!--Localización-->
			<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
				<div class="input-group mx-auto">
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
						<div class="input-group-prepend">
							<span class="input-group-text btn btn-warning text-center" id="basic-addto119">Localización
								de los Apiarios</span>
							<input type="text" name="loc_api" value="{{$persona->loc_api}}" disabled="true"
								class="e-border md-textarea form-control lineA btn btn-warning"
								aria-describedby="basic-addto119">
						</div>
					</div>
				</div>
			</div>

			<!--Observación-->
			<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
				<div class="input-group mx-auto">
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
						<div class="input-group-prepend">
							<span class="input-group-text btn btn-warning text-center"
								id="basic-addon120">Observación</span>
							<input type="text" name="observacion" value="{{$persona->observacion}}" disabled="true"
								class="e-border md-textarea form-control lineA btn btn-warning"
								aria-describedby="basic-addon120">
						</div>
					</div>
				</div>
			</div>

			<!---Datos del banco--->
			<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
				<div class="input-group mx-auto">
					<div class="mx-auto">
						<div class="input-group-prepend">
							<button type="button" class="btn btn-warning btn-responsive btninter text-center"
								data-toggle="modal" data-target="#exampleModal">
								<span>Datos del Banco<span>
							</button>
						</div>
					</div>
				</div>
			</div>

			<!-- Modal -->
			<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
				<div class="input-group mx-auto">
					<div class="mx-auto">
						<div class="input-group-prepend">
							<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
								aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Datos Bancarios</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div
											class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
											<div class="input-group mx-auto">
												<div class="mx-auto">
													<div class="input-group-prepend">
														<div
															class="modal-body col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto">
															<p>Nombre del Titular: {{$persona->nombre}}</p>
															<p>No. de Cuenta: {{$persona->nCuenta}}</p>
															<p>Clave Interbancaria: {{$persona->clave}}</p>
															<p>Banco: {{$persona->banco}}</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><br><br><br><br>

			<!---Datos del Tabla--->
			<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
				<div class="input-group mx-auto">
					<div class="mx-auto">
						<div class="input-group-prepend">
							<button type="button" class="btn btn-warning btn-responsive btninter text-center"
								data-toggle="modal" data-target="#ModalTransacciones">
								<span>Transacciones<span>
							</button>
						</div>
					</div>
				</div>
			</div>

			<!-- Modal Tabla-->
			<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
				<div class="input-group mx-auto">
					<div class="mx-auto">
						<div class="input-group-prepend">
							<div class="modal fade" id="ModalTransacciones" tabindex="-1" role="dialog"
								aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Datos de Operación</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div
											class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
											<div class="input-group mx-auto">
												<div class="mx-auto">
													<div class="input-group-prepend">
														<div
															class="modal-body col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto">
															<!--Tabla-->
															<div class="table-responsive">
																<table
																	class="table table-hover table-condensed table-sm text-white">
																	<thead class="thead-dark">
																		<th scope="col">No</th>
																		<th scope="col">Cantidad</th>
																		<th scope="col">Precio</th>
																		<th scope="col">Fecha</th>
																		<th scope="col">Total</th>
																	</thead>
																	<tbody>
																		<tr>
																			<td scope="row" class="bg-warning">
																				{{$persona->noOperacion}}</td>
																			<td scope="row" class="bg-warning">
																				{{$persona->opCantidad}}</td>
																			<td scope="row" class="bg-warning">
																				{{$persona->opPrecio}}</td>
																			<td scope="row" class="bg-warning">
																				{{$persona->opFecha}}</td>
																			<td scope="row" class="bg-warning">
																				{{$persona->opTotal}}</td>
																		</tr>
																	</tbody>
																</table>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
		<?php //#Fin del formulario?>
		{!!Form::Close()!!}
		<?php //#Fin del contenido de esta vista ?>
		@endsection