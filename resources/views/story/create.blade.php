@extends ('layouts.admin')
@section ('contenido')

<div class="row container-fluid col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto">
	@if(count($errors)>0)
		<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach
		</ul>
	</div>
	@endif
</div>

{!!Form::open(array('url'=>'story','method'=>'POST','autocomplete'=>'off','files'=>'true','enctype'=>'multipart/form-data'))!!}
{{Form::token()}}	

<!-- #Datos de Edición-->
	<!-- #Titulo-->
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 offset-lg-3 offset-md-3 offset-sm-3 offset-xs-3 text-center">
				<h3 class="e-text-color text-bor">Datos de la Miel</h3>
			</div>

		<!-- #Datos Registro-->
			<div class="collapse container-fluid row main col-md-12 col-sm-auto col-lg-12 py-4" id="p-id">
				<div class="card card-body">

					<!-- #Folio--
					<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
						<div class="input-group mx-auto">
							<div class="input-group-prepend col-lg-11 col-md-11 col-sm-11 col-xs-11 mx-auto">							
								<input type="text" name="{ {$query}}" value="{ {$query}}" id="{ {$query}}" class="md-textarea form-control lineA e-color-c" placeholder="{ {$query}}">
							</div>
						</div>
					</div--->
					
					<!-- #Cantidad-->
						<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
							<div class="input-group mx-auto">
								<div class="input-group-prepend col-lg-11 col-md-11 col-sm-11 col-xs-11 mx-auto">							
									<input type="text" name="cantidad" value="{{old('cantidad')}}" id="cantidad" class="md-textarea form-control lineA e-color-c" placeholder="Cantidad">
								</div>
							</div>
						</div>

					<!-- #Fecha-->
					<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
						<div class="input-group mx-auto">
							<div class="input-group-prepend col-lg-11 col-md-11 col-sm-11 col-xs-11 mx-auto">							
								<input type="date" name="fechaRegistro" value="{{old('fechaRegistro')}}" id="fechaRegistro" class="md-textarea form-control lineA e-color-c" placeholder="Fecha de Registro">
							</div>
						</div>
					</div>

				</div>
			</div>
		
		<!-- #botones-->
			<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
				<div class="input-group mx-auto">
					<div class="input-group-prepend col-lg-11 col-md-11 col-sm-11 col-xs-11 mx-auto">
						<button class="btn btn-primary btn-block" type="submit">Guardar</button>
					</div>
				</div>
			</div>

{!!Form::Close()!!}
<script>
	$('#p-id').collapse();
</script>
@endsection