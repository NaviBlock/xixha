@extends ('layouts.admin')
@section ('contenido')

<div class="row container-fluid col-lg-12 col-sm-12 col-md-12 col-xs-12 mx-auto">
	<h3 class="e-color">Añadir Transacción al Apicultor</h3>
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

{!!Form::model($stories,['method'=>'PATCH','route'=>['story.update',$stories->id_story]]) !!}
{{Form::token()}}

<!-- #Datos de Edición-->
	<!-- #Titulo-->
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 offset-lg-3 offset-md-3 offset-sm-3 offset-xs-3 text-center">
				<h3 class="e-text-color text-bor">Datos Personales del Apicultor</h3>
			</div>
		<!-- #Datos Apicultor-->
			<div class="collapse container-fluid row main col-md-12 col-sm-auto col-lg-12 py-4" id="p-id">
				<div class="card card-body">
				<!-- #Cantidad-->
					<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
						<div class="input-group mx-auto">
							<div class="input-group-prepend col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">								
								<span class="input-group-text btn btn-warning e-border" id="basic-addon106">Calle</span>
								<input type="text" name="cantidad" value="{{$stories->cantidad}}" class="e-border md-textarea form-control lineA btn btn-warning" aria-describedby="basic-addon106">
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
					<div class="input-group-prepend col-lg-11 col-md-11 col-sm-11 col-xs-11 mx-auto">
						<button class="btn btn-danger btn-block " type="reset">Cancelar</button>						
					</div>
				</div>
			</div>
						
{!!Form::Close()!!}
<script>
	$('#p-id').collapse();	
</script>
@endsection