@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="container-fluid">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto"> 
			<!--Titulo-->
				<div class="text-center">
					<h3 class="e-text-color">Nuevo Pago</h3>
				</div>
				@if (count($errors)>0)
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

{!!Form::open(array('url'=>'banx','method'=>'POST','autocomplete'=>'off'))!!}
{{Form::token()}}
<div class="container-fluid">
	<div class="row">
		<div class="main col-md-12 ml-sm-auto col-lg-12">	
						
			<!--Fecha-->
				<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
					<div class="input-group mx-auto">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mx-auto">
							<div class="input-group-prepend">								
								<label for="fecha" class="input-group-text e-border">Fecha</label>
								<input id="fecha" type="date" name="fecha" min="2019-01-01" max="2020-01-01" value="{{ old('fecha') }}" class="md-textarea form-control lineA e-border">
							</div>
						</div>
					</div>
				</div>

			<!--Cantidad-->
				<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
					<div class="input-group mx-auto">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mx-auto">
							<div class="input-group-prepend">								
								<label for="cantidad" class="input-group-text e-border">Nombre</label>
								<input id="cantidad" type="text" name="cantidad" value="{{old('cantidad') }}" class="md-textarea form-control lineA e-border">								
							</div>							
						</div>
					</div>
				</div>
				
			<!--Nombre-->
				<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
					<div class="input-group mx-auto">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mx-auto">
							<div class="input-group-prepend">									
								<label for="nombre" class="input-group-text e-border">Nombre</label>
								<label id="nombre" type="text" name="nombre" value="{{$persona->nombre}}" disabled ="true" class="md-textarea form-control lineA e-border">
							</div>
						</div>
					</div>
				</div>

			<!--ApellidoP-->
				<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
					<div class="input-group mx-auto">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mx-auto">
							<div class="input-group-prepend">									
								<label for="apellidopa" class="input-group-text e-border">Apeliido Parteno</label>
								<input id="apellidopa" type="text" name="apellidopa" value="{{ old('apellidopa') }}" class="md-textarea form-control lineA e-border">
							</div>								
						</div>
					</div>
				</div>

			<!--ApellidosM-->
				<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
					<div class="input-group mx-auto">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mx-auto">
							<div class="input-group-prepend">									
								<label for="apellidoma" class="input-group-text e-border">Apellido Marteno</label>
								<input id="apellidoma" type="text" name="apellidoma" value="{{ old('apellidoma') }}" class="md-textarea form-control lineA e-border">
							</div>								
						</div>
					</div>
				</div>	

			<!--name-->
				<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
					<div class="input-group mx-auto">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mx-auto">
							<div class="input-group-prepend">									
								<label for="name" class="input-group-text e-border">Nombre de Administrador</label>
								<input id="name" type="text" name="name" value="{{ old('name') }}" class="md-textarea form-control lineA e-border">
							</div>								
						</div>
					</div>
				</div>				
		 
			<!--rol-->
				<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
					<div class="input-group mx-auto">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mx-auto">
							<div class="input-group-prepend">
								<select name="rol" value="{{old('rol')}}" id="rol" class="md-textarea form-control lineA e-border">
									<option value="Super">Supervisor</option>									
									<option value="Mr.Root">Administrador</option>
								</select>									
							</div>							
						</div>
					</div>
				</div>

			<!--email-->
				<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
					<div class="input-group mx-auto">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mx-auto">
							<div class="input-group-prepend">									
								<label for="email" class="input-group-text e-border">Email</label>
								<input id="email" type="text" name="email" value="{{ old('email') }}" class="md-textarea form-control lineA e-border">
							</div>								
						</div>
					</div>
				</div>				

			<!--Clave-->
				<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
					<div class="input-group mx-auto">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mx-auto">
							<div class="input-group-prepend">									
								<label for="clave" class="input-group-text e-border">Clave</label>
								<input id="clave" type="text" name="clave" value="{{ old('clave') }}" class="md-textarea form-control lineA e-border">
							</div>								
						</div>
					</div>
				</div>				

			<!--Banco-->
				<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
					<div class="input-group mx-auto">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mx-auto">
							<div class="input-group-prepend">									
								<label for="nombanco" class="input-group-text e-border">Banco</label>
								<input id="nombanco" type="text" name="nombanco" value="{{ old('nombanco') }}" class="md-textarea form-control lineA e-border">
							</div>								
						</div>
					</div>
				</div>

			<!--Token-->
				<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
					<div class="input-group mx-auto">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mx-auto">
							<div class="input-group-prepend">									
								<label for="token" class="input-group-text e-border">Banco</label>
								<input id="token" type="text" name="token" value="{{ old('token') }}" class="md-textarea form-control lineA e-border">
							</div>								
						</div>
					</div>
				</div>				
				

			<!--botones--->
				<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center aolq" id="datoy">					<div class="input-group mx-auto">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mx-auto">
						<div class="input-group-prepend">
							<button class="btn btn-primary btn-block" type="submit">Guardar</button>
						</div>
					</div>
				</div><br><br>

				<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center aolq" id="datoy">					<div class="input-group mx-auto">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mx-auto">
						<div class="input-group-prepend">
							<button class="btn btn-danger btn-block" type="reset">Cancelar</button>
						</div>
					</div>
				</div>
			
			{!!Form::Close()!!}		
		</div>
	</div>
</div>
<script src="{{asset('js/jquery-3.3.1.slim-cnd.min.js')}}"></script>
<script src="{{asset('js/popper-cnd.min.js')}}"></script>
<script src="{{asset('js/bootstrap-cnd.min.js')}}"></script>
<script src="{{asset('js/js.js')}}"></script>
@endsection