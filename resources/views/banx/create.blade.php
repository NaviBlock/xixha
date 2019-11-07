@extends ('layouts.admin')
@section ('contenido')
<div class="row"> 
	<div class="container-fluid">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto">			
			<!---Titulo---->
				<div class="text-center py-4">				
					<h3 class="e-text-color">Pagos</h3>
				</div>	
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
	</div>
</div>

{!!Form::open(array('url'=>'banx','method'=>'POST','autocomplete'=>'off','files'=>'true','enctype'=>'multipart/form-data'))!!}
{{Form::token()}}	
<div class="container-fluid">
	<div class="row">
		<div class="main col-md-12 ml-sm-auto col-lg-12 py-4">		
			<!---Nombre del apicultor---->
				<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center py-4">
					<div class="input-group mx-auto">
						<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
							<div class="input-group-prepend">								
								<span type="text" name="nombre" required class="input-group-text e-border md-textarea form-control lineA" placeholder="Nombre..." aria-describedby="basic-addon2">{{old('$persona->nombre')}}</span>
								<!--input type="text" name="apellidopa" required value="{ {old('apellidopa')}}" class="input-group-text e-border md-textarea form-control lineA" placeholder="Apellido Parteno..." aria-describedby="basic-addon2">
								<input type="text" name="apellidoma" required value="{ {  }}old('apellidoma')}}" class="input-group-text e-border md-textarea form-control lineA" placeholder="Apellido Marteno..." aria-describedby="basic-addon2"-->
							</div>
						</div>
					</div>
				</div>

			<!---rol---->
				<!--div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
					<div class="input-group mx-auto">
						<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon2">ROL</span>
								<span  name="rol" value="{ {$usuario->rol}}" id="rol" class="md-textarea form-control lineA"></span>
							</div>
						</div>
					</div>
				</div-->
	
			<!---municipio---->
				<!---div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
					<div class="input-group mx-auto">
						<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon2">MUNICIPIO</span>
								<input type="text" name="municipio" value="{ {  }}old('municipio')}}" id="municipio" class="md-textarea form-control lineA" placeholder="MUNICIPIO...">
							</div>
						</div>
					</div>
				</div-->	

			<!--telefono-->
				<!--div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
					<div class="input-group mx-auto">
						<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon2">Teléfono 10 Dígitos</span>
								<input type="tel" name="telefono" pattern="[0-9]{10}" value="{ {old('telefono')}}" class="md-textarea form-control lineA" placeholder="Teléfono...">
							</div>
						</div>
					</div>
				</div-->

			<!--email-->
				<!--div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
					<div class="input-group mx-auto">
						<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
							<div class="input-group-prepend">
								<span class="input-group-text" id="email">@</span>	
								<input type="text" name="email" value="{ {old('email')}}" id="email" class="md-textarea form-control lineA" placeholder="Correo Electronico..." aria-label="Username" aria-describedby="addon-wrapping">
							</div>
						</div>
					</div>
				</div--->


			<!--botones-->
				<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center aolq" id="datoy">
					<div class="input-group mx-auto">
						<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
							<div class="input-group-prepend">
								<button class="btn btn-primary btn-block btn-lg" type="submit">Guardar</button><br>
								<button class="btn btn-danger btn-block btn-lg" type="reset">Cancelar</button>
							</div>
						</div>
					</div>
				</div>
		</div>
	</div>
	{!!Form::Close()!!}	
</div> 
@endsection