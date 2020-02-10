@extends ('layouts.banx')
@section ('contenido')

{!!Form::open(array('url'=>'banx','method'=>'POST','autocomplete'=>'off'))!!}
{{Form::token()}}

<!-- #Datos de Registro-->
<!-- #Titulo-->
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 offset-lg-3 offset-md-3 offset-sm-3 offset-xs-3 text-center">
	<h3 class="e-text-color text-bor top-al">Sistema de Pago</h3>
</div>

<!-- #Alta de Apicultor-->
<div class="collapse container-fluid row main col-md-12 col-sm-auto col-lg-12 py-4" id="p-id">
	<div class="card card-body rest1">

		<!-- #Nombre-->
		<!--div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
			<div class="input-group mx-auto">
				<div class="input-group-prepend col-lg-11 col-md-11 col-sm-11 col-xs-11 mx-auto">
					<input type="text" name="name_user" value="{{old('name_user')}}" id="name_user"
						class="md-textarea form-control lineA e-color-c" placeholder="Nombre del Apicultor">
				</div>
			</div>
		</div---->

		<!-- #Banco-->
		<!---div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
			<div class="input-group mx-auto">
				<div class="input-group-prepend col-lg-11 col-md-11 col-sm-11 col-xs-11 mx-auto">
					<input type="text" name="banco" value="{{old('banco')}}" id="banco"
						class="md-textarea form-control lineA e-color-c" placeholder="Nombre del Banco">
				</div>
			</div>
		</div-->

		<!-- #No Cuenta-->
		<!--div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
			<div class="input-group mx-auto">
				<div class="input-group-prepend col-lg-11 col-md-11 col-sm-11 col-xs-11 mx-auto">
					<input type="text" name="no_cuenta" value="{{old('no_cuenta')}}" id="no_cuenta"
						class="md-textarea form-control lineA e-color-c" placeholder="Numero de Cuenta">
				</div>
			</div>
		</div-->

		<!-- #Folio-->
		<!--div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
			<div class="input-group mx-auto">
				<div class="input-group-prepend col-lg-11 col-md-11 col-sm-11 col-xs-11 mx-auto">
					<input type="text" name="folio" value="{{old('folio')}}" id="folio"
						class="md-textarea form-control lineA e-color-c" placeholder="Folio del Apicultor">
				</div>
			</div>
		</div-->

		<!-- #Token-->
		<!--div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
			<div class="input-group mx-auto">
				<div class="input-group-prepend col-lg-11 col-md-11 col-sm-11 col-xs-11 mx-auto">
					<input type="text" name="token" value="{{old('token')}}" id="token"
						class="md-textarea form-control lineA e-color-c" placeholder="Token del apicultor">
				</div>
			</div>
		</div-->

		<!-- #Fecha-->
		<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
			<div class="input-group mx-auto">
				<div class="input-group-prepend col-lg-11 col-md-11 col-sm-11 col-xs-11 mx-auto">
					<input type="date" name="fecha" value="{{old('fecha')}}" id="fecha"
						class="md-textarea form-control lineA e-color-c" placeholder="Fecha del pago">
				</div>
			</div>
		</div>

	</div>
</div>

<!-- #Botones-->
<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center aolq" id="datoy">
	<div class="input-group mx-auto">
		<div class="input-group-prepend col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto">
			<button class="btn btn-primary btn-block btn-lg" type="submit">Guardar</button>
		</div>
	</div>
</div>

{!!Form::Close()!!}
<script>
	$('#p-id').collapse();
</script>
@endsection