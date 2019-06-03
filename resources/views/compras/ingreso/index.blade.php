@extends('layouts.admin')
@section('contenido')
	<div class="row"> 
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h3 class="text-center">Listado de Compras</h3><br><br>
		</div>
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
			<a href="ingreso/create"> <button class="btn btn-success btn-block btn-lg">Nuevo</button></a>
		</div>
		<br><br><br><br>
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			@include('compras.ingreso.search')
		</div> 
	</div>
	<div class="row"> 
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive lineA">
				<table class="table table-striped table-bordered table-condensed table-hover text-center">
					<thead>
						<th>Fecha</th> 
						<th>Proveedor</th>
						<th>Comprobante</th>
						<th>Impuesto</th>
						<th>Total</th>
						<th>Opciones</th>
					</thead>
					@foreach($ingresos as $ing)
						<tr>
							<td>{{ $ing->fecha_hora }}</td>
							<td>{{ $ing->nombre}}</td>
							<td>{{ $ing->tipo_comprobante.': '.$ing->serie_comprobante.'-'.$ing->num_comprobante}}</td>
							<td>{{ $ing->impuesto }}</td>
							<td>{{ $ing->total }}</td>
							<td>
								<div class="btn-group mr-4" role="group" aria-label="Boton Detalle">
									<a href="{{URL::action('IngresoController@show',$ing->idingreso)}}">
										<button class="btn btn-primary btn-block">Detalles</button>
									</a>
								</div>
								<div class="btn-group mr-4" role="group" aria-label="Boton Eliminar">
									<a href="" data-target="#modal-delete-{{$ing->idingreso}}" data-toggle="modal">
										<button class="btn btn-danger btn-block">Anular</button>
									</a>
								</div>
							</td>
						</tr>
						@include('compras.ingreso.modal')
					@endforeach
				</table>
			</div>
			{{$ingresos->render()}}
		</div>
	</div>
@endsection 