@extends ('layouts.admin')
@section ('contenido')
<div class = "row"> 
	<div class="container-fluid">
		<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 mx-auto">
			<h3>Datos Bancarios de: {{ $persona->nombre}}</h3>
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
{!!Form::model($persona,['method'=>'PATCH','route'=>['root.update',$persona->idpersona]]) !!}
{{Form::token()}}

<div class="container-fluid">
	<div class="row">
		<div class="main col-md-12 ml-sm-auto col-lg-12 py-4">

		<!--Titulo-->
			<div class="text-center"> 
				<h3 class="e-text-color">Datos Bancario del Apicultor</h3>
			</div>

		<!---Nombre del apicultor---->
			<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center py-4">
				<div class="input-group mx-auto">
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
						<div class="input-group-prepend">
							<span class="text-center input-group-text btn btn-warning" id="basic-addon101">Folio de: {{$persona->nombre}} {{$persona->apellidopa}} {{$persona->apellidoma}}</span>
							<input type="text" name="folio" value="{{$persona->folio}}" disabled="true" class="input-group-text e-border md-textarea form-control lineA" aria-describedby="basic-addon101">
						</div>
					</div>
				</div>
			</div>
		
		<!--Nombre--->
			<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">	
				<div class="input-group mx-auto">
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
						<div class="input-group-prepend">
							<span class="text-center input-group-text btn btn-warning" id="basic-addon102">Nombre del Apicultor</span>
							<input type="text" name="nombre" required value="{{$persona->nombre}}" disabled="true" class="input-group-text e-border md-textarea form-control lineA" placeholder="Nombre..." aria-describedby="basic-addon102">
							<input type="text" name="apellidopa" required value="{{$persona->apellidopa}}" disabled="true" class="input-group-text e-border md-textarea form-control lineA" placeholder="Apellido Parteno..." aria-describedby="basic-addon102">
							<input type="text" name="apellidoma" required value="{{$persona->apellidoma}}" disabled="true" class="input-group-text e-border md-textarea form-control lineA" placeholder="Apellido Marteno..." aria-describedby="basic-addon102">		
						</div>
					</div>
				</div>
			</div>
		
		<!--Municipio-->
			<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
				<div class="input-group mx-auto">
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
						<div class="input-group-prepend">
							<span class="text-center input-group-text btn btn-warning" id="basic-addon104">Municipio</span>
							<input type="text" name="municipio" value="{{$persona->municipio}}" disabled ="true" class="e-border md-textarea form-control lineA btn btn-warning" aria-describedby="basic-addon104">							
						</div>
					</div>
				</div>
			</div>

		<!--Telefono-->
			<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
				<div class="input-group mx-auto">
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
						<div class="input-group-prepend">
							<span class="input-group-text btn btn-warning" id="basic-addon107">Telefono</span>
							<input type="text" name="telefono" value="{{$persona->telefono}}" disabled ="true" class="e-border md-textarea form-control lineA btn btn-warning" aria-describedby="basic-addon107">
						</div>
					</div>
				</div>
			</div>

		<!--curp-->
			<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
				<div class="input-group mx-auto">
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
						<div class="input-group-prepend">
							<span class="input-group-text btn btn-warning" id="basic-addon110">CURP</span>
							<input type="text" name="curp" value="{{$persona->curp}}" disabled ="true" class="e-border md-textarea form-control lineA btn btn-warning" aria-describedby="basic-addon110">
						</div>
					</div>					
				</div>
			</div>

		<!--rfc-->
			<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
				<div class="input-group mx-auto">
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
						<div class="input-group-prepend">
							<span class="input-group-text btn btn-warning" id="basic-addon111">RFC</span>
							<input type="text" name="rfc" value="{{$persona->rfc}}" disabled ="true" class="e-border md-textarea form-control lineA btn btn-warning" aria-describedby="basic-addon111">
						</div>
					</div>
				</div>
			</div>
	
		<!---chapetas-->
			<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
				<div class="input-group mx-auto">
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
						<div class="input-group-prepend">
							<span class="input-group-text btn btn-warning" id="basic-addon115">Datos Bancarios</span>
							<input type="text" name="num_colmena" value="{{$persona->num_colmena}}" class="e-border md-textarea form-control lineA btn btn-warning" aria-describedby="basic-addon115">
						</div>
					</div>
				</div>
			</div>

		<!---botones-->
			<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
				<div class="input-group mx-auto">
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
						<div class="input-group-prepend">			
							<button class="btn btn-primary btn-block" type="submit">Guardar</button><br>
							<button class="btn btn-danger btn-block " type="reset">Cancelar</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	{!!Form::Close()!!}		
@endsection