@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="coontainer-fluid py-4">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto"> 
			<!--Titulo-->
				<div class="text-center py-4">
					<h3 class="e-text-color">Editar Usuario: {{ $usuario->name}}</h3>
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

{!!Form::model($usuario,['method'=>'PATCH','route'=>['secs.update',$usuario->id]])!!}
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
								<input id="name" type="text" require class="text-center md-textarea form-control lineA e-border" name="name" value="{{$usuario->name}}">
									@if ($errors->has('name'))
									<span class="help-block">
										<strong>{{ $errors->first('name') }}</strong>
									</span>
								@endif			
							</div>
						</div>
					</div>
				</div>

			<!--user-->				
				<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
					<div class="input-group mx-auto">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mx-auto">
							<div class="input-group-prepend">
								<label for="email" class="input-group-text e-border">E-Mail</label>			
								<span type="text" class="md-textarea form-control lineA e-border">{{$usuario->email}}</span>
							</div>
						</div>
					</div>
				</div>

			<!--pass_A-->
				<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
					<div class="input-group mx-auto">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mx-auto">
							<div class="input-group-prepend">
								<!--div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}"-->
								<label for="password" class="input-group-text e-border">Password</label>				
								<input id="password" type="password" require class="md-textarea form-control lineA e-border" name="password">
								@if ($errors->has('password'))
									<span class="help-block">
										<strong>{{ $errors->first('password') }}</strong>
									</span>
								@endif			
							</div>
						</div>
					</div>
				</div>
			
			<!--pass_B-->
				<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
					<div class="input-group mx-auto">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mx-auto">
							<div class="input-group-prepend">
								<label for="password-confirm" class="input-group-text e-border">Confirmar Password</label>
								<input id="password-confirm" require type="password" class="md-textarea form-control lineA e-border" name="password_confirmation">
								@if ($errors->has('password_confirmation'))
									<span class="help-block">
										<strong>{{ $errors->first('password_confirmation') }}</strong>
									</span>
								@endif				
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 mx-auto">
						<div class="input-group-prepend">							
							<p class="input-group-text e-border">Rol de cada Token</p>							
						</div><br>
					</div>

			<!--rol-->
				<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
					<div class="input-group mx-auto">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mx-auto">
							<div class="input-group-prepend">
								<label for="password-confirm" class="input-group-text e-border">Nivel de rol</label>
								<select name="rol" value="{{old('rol')}}" id="rol" class="md-textarea form-control lineA e-border">
									<option value="User">User</option>
									<option value="Super">Supervisor</option>									
									<option value="Admin">Administrador</option>
									<option value="Mr.Root">Mr.Root</option>
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
							<select name="id_admin" value="{{old('is_admin')}}" id="is_admin" class="md-textarea form-control lineA e-border">
								<option value="0">0</option>
								<option value="1">1</option>
							</select>
						</div>							
					</div>
				</div>
			</div>

			<!--botones--->
					<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center aolq py-4" id="datoy">				
					<div class="input-group mx-auto">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mx-auto">
								<div class="input-group-prepend">
									<button class="btn btn-primary btn-block" type="submit">Guardar</button>
									<button class="btn btn-danger btn-block rest" type="reset">Cancelar</button>
								</div>
							</div>
						</div>
					</div>				
			{!!Form::Close()!!}		
		</div>
	</div>
</div>
@endsection