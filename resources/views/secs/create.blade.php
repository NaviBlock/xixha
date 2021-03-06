@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="container-fluid py-4">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto"> 
			<!--Titulo-->
				<div class="text-center py-4">
					<h3 class="e-text-color">Nuevo Rol</h3>
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

{!!Form::open(array('url'=>'secs','method'=>'POST','autocomplete'=>'off'))!!}
{{Form::token()}}
<div class="container-fluid">
	<div class="row">
		<div class="main col-md-12 ml-sm-auto col-lg-12 py-4">			
			<!--Nombre-->
				<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
					<div class="input-group mx-auto">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mx-auto">
							<div class="input-group-prepend">
								<!--div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}"-->
								<label for="name" class="input-group-text e-border">Nombre</label>
								<input id="name" type="text" name="name" value="{{ old('name') }}" class="md-textarea form-control lineA e-border">
								@if ($errors->has('name'))
									<span>
										<strong>{{ $errors->first('name') }}</strong>
									</span>
								@endif
							</div>
							<!--/div-->
						</div>
					</div>
				</div>
		
			<!--Email-->
				<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
					<div class="input-group mx-auto">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mx-auto">
							<div class="input-group-prepend">
								<!--div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}"-->
								<label for="email" class="input-group-text e-border">E-Mail</label>								
								<input id="email" type="email" name="email" value="{{ old('email') }}" class="md-textarea form-control lineA e-border">
								@if ($errors->has('email'))
									<span>
										<strong>{{ $errors->first('email') }}</strong>
									</span>
								@endif
							</div>
							<!--/div-->
						</div>
					</div>
				</div>
	
			<!--Password-->
				<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
					<div class="input-group mx-auto">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mx-auto">
							<div class="input-group-prepend">
							<!---div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}"--->
							<label for="password" class="input-group-text e-border">Password</label>							
								<input id="password" type="password" name="password" class="md-textarea form-control lineA e-border">
								@if ($errors->has('password'))
									<span>
										<strong>{{ $errors->first('password') }}</strong>
									</span>
								@endif
							</div>
							<!--/div-->
						</div>
					</div>
				</div>

			<!--Password-->
				<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
					<div class="input-group mx-auto">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mx-auto">
							<div class="input-group-prepend">
							<!---div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}"--->
							<label for="password-confirm" class="input-group-text e-border">Confirmar Password</label>								
								<input id="password-confirm" type="password" name="password_confirmation" class="md-textarea form-control lineA e-border">
								@if ($errors->has('password_confirmation'))
									<span>
										<strong>{{ $errors->first('password_confirmation') }}</strong>
									</span>
								@endif
							</div>
							<!---/div--->
						</div>
					</div>
				</div>
  
			<!--rol-->
				<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
					<div class="input-group mx-auto">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mx-auto">
							<div class="input-group-prepend">
								<select name="rol" value="{{old('rol')}}" id="rol" class="md-textarea form-control lineA e-border">
									<option value="User">User</option>
									<option value="Super">Supervisor</option>																										
									<option value="Mr.Root">Root</option>
								</select>									
							</div>							
						</div>
					</div>
				</div>

			<!--secs-->
			<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
				<div class="input-group mx-auto">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mx-auto">
						<div class="input-group-prepend">
							<label class="input-group-text e-border">Nivel de token</label>		
							<select name="is_admin" value="{{old('is_admin')}}" id="is_admin" class="md-textarea form-control lineA e-border">
								<option value="0">0</option>
								<option value="1">1</option>
							</select>
						</div>							
					</div>
				</div>
			</div>

			<!--pin-->
			<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
				<div class="input-group mx-auto">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mx-auto">
						<div class="input-group-prepend">
							<p class="input-group-text e-border">Pin de 5 al 100</p>
							<input id="pin" type="text" require class="md-textarea form-control lineA e-border" name="pin" min="50" max="1000">	 
						</div>					
					</div>
				</div>
			</div>

			<!--botones--->
				<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center aolq py-4" id="datoy">					<div class="input-group mx-auto">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mx-auto">
						<div class="input-group-prepend">
							<button class="btn btn-primary btn-block" type="submit">Guardar</button>
						</div>
					</div>
				</div>

				<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center aolq py-4" id="datoy">					<div class="input-group mx-auto">
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