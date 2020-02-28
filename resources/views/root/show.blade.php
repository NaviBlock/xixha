<?php/*
|--------------------------------------------------------------------------
| Vista root/edit
|--------------------------------------------------------------------------
| En esta vista llamamos un formulario que contiene informacion del secs,
| Este proceso se obtiene la realizar una consulta en el controlador UsuarioController 
| 
*/?>
@extends ('layouts.admin')
@section ('contenido')

<div class="row container-fluid col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto">
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
<?php //#Inicio del formulario?>
{!!Form::model($persona,['method'=>'PATCH','route'=>['root.update',$persona->idpersona]]) !!}
<?php //#Token de seguridad que se aplica al formulario?>
{{Form::token()}}
<!-- #Datos generales-->
<!--- #Titulo---->
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 offset-lg-3 offset-md-3 offset-sm-3 offset-xs-3 text-center">
	<h3 class="e-text-color text-bor">Datos Personales del Apicultor</h3>
</div>
<!--- #Datos Report-->
<div class="collapse container-fluid row main col-md-12 col-sm-auto col-lg-12 py-4" id="p-id">
	<div class="card card-body">

		<!--- #Nombre del apicultor---->
		<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
			<div class="input-group mx-auto">
				<div class="input-group-prepend col-lg-11 col-md-11 col-sm-11 col-xs-11 mx-auto">
					<p class="input-group-text btn btn-warning e-border" id="basic-addon101">Folio de:
						{{$persona->nombre}} {{$persona->apellidopa}} {{$persona->apellidoma}}</p>
					<input class="input-group-text e-border md-textarea form-control lineA" type="text" name="folio"
						value="{{$persona->folio}}" disabled="true" aria-describedby="basic-addon101">
				</div>
			</div>
		</div>

		<!--- #Estado---->
		<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
			<div class="input-group mx-auto">
				<div class="input-group-prepend input-group-prepend col-lg-11  col-md-11 col-sm-11 col-xs-11 mx-auto">
					<span class="text-center input-group-text btn btn-warning e-border"
						id="basic-addon102">Estado</span>
					<input type="text" name="estadoP" value="{{$persona->estadoP}}" disabled="true"
						class="e-border md-textarea form-control lineA btn btn-warning"
						aria-describedby="basic-addon102">
				</div>
			</div>
		</div>

		<!-- #Municipio-->
		<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
			<div class="input-group mx-auto">
				<div class="input-group-prepend input-group-prepend col-lg-11  col-md-11 col-sm-11 col-xs-11 mx-auto">
					<span class="text-center input-group-text btn btn-warning e-border"
						id="basic-addon103">Municipio</span>
					<input type="text" name="municipio" value="{{$persona->municipio}}" disabled="true"
						class="e-border md-textarea form-control lineA btn btn-warning"
						aria-describedby="basic-addon103">
				</div>
			</div>
		</div>

		<!-- #Colonia-->
		<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
			<div class="input-group mx-auto">
				<div class="input-group-prepend input-group-prepend col-lg-11  col-md-11 col-sm-11 col-xs-11 mx-auto">
					<span class="text-center input-group-text btn btn-warning e-border"
						id="basic-addon104">Colonia</span>
					<input type="text" name="colonia" value="{{$persona->colonia}}" disabled="true"
						class="e-border md-textarea form-control lineA btn btn-warning"
						aria-describedby="basic-addon104">
				</div>
			</div>
		</div>

		<!-- #Calle-->
		<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
			<div class="input-group mx-auto">
				<div class="input-group-prepend input-group-prepend col-lg-11  col-md-11 col-sm-11 col-xs-11 mx-auto">
					<span class="text-center input-group-text btn btn-warning e-border" id="basic-addon105">Calle</span>
					<input type="text" name="calle" value="{{$persona->calle}}" disabled="true"
						class="e-border md-textarea form-control lineA btn btn-warning"
						aria-describedby="basic-addon105">
				</div>
			</div>
		</div>

		<!-- #Telefono--->
		<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
			<div class="input-group mx-auto">
				<div class="input-group-prepend input-group-prepend col-lg-11  col-md-11 col-sm-11 col-xs-11 mx-auto">
					<span class="text-center input-group-text btn btn-warning e-border"
						id="basic-addon106">Telefono</span>
					<input type="text" name="telefono" value="{{$persona->telefono}}" disabled="true"
						class="e-border md-textarea form-control lineA btn btn-warning"
						aria-describedby="basic-addon106">
				</div>
			</div>
		</div>

		<!-- #Email-->
		<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
			<div class="input-group mx-auto">
				<div class="input-group-prepend input-group-prepend col-lg-11  col-md-11 col-sm-11 col-xs-11 mx-auto">
					<span class="text-center input-group-text btn btn-warning e-border" id="basic-addon107">Correo
						electronico</span>
					<input type="text" name="email" value="{{$persona->email}}" disabled="true"
						class="e-border md-textarea form-control lineA btn btn-warning"
						aria-describedby="basic-addon107">
				</div>
			</div>
		</div>

		<!-- #Sexo-->
		<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
			<div class="input-group mx-auto">
				<div class="input-group-prepend input-group-prepend col-lg-11  col-md-11 col-sm-11 col-xs-11 mx-auto">
					<span class="text-center input-group-text btn btn-warning e-border" id="basic-addon108">SEXO</span>
					<input type="text" name="sexo" value="{{$persona->sexo}}" disabled="true"
						class="e-border md-textarea form-control lineA btn btn-warning"
						aria-describedby="basic-addon108">
				</div>
			</div>
		</div>

		<!-- #CURP-->
		<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
			<div class="input-group mx-auto">
				<div class="input-group-prepend input-group-prepend col-lg-11  col-md-11 col-sm-11 col-xs-11 mx-auto">
					<span class="input-group-text btn btn-warning text-center e-border" id="basic-addon110">CURP</span>
					<input type="text" name="curp" value="{{$persona->curp}}" disabled="true"
						class="e-border md-textarea form-control lineA btn btn-warning"
						aria-describedby="basic-addon109">
				</div>
			</div>
		</div>

		<!-- #RFC-->
		<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
			<div class="input-group mx-auto">
				<div class="input-group-prepend input-group-prepend col-lg-11  col-md-11 col-sm-11 col-xs-11 mx-auto">
					<span class="input-group-text btn btn-warning text-center e-border" id="basic-addon2">RFC</span>
					<input type="text" name="rfc" value="{{$persona->rfc}}" disabled="true"
						class="e-border md-textarea form-control lineA btn btn-warning"
						aria-describedby="basic-addon110">
				</div>
			</div>
		</div>
	</div>
</div>


<?php //#Datos de rastreabilidad general?>
<!-- #Titulo de Rastreabilidad-->
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 offset-lg-3 offset-md-3 offset-sm-3 offset-xs-3 text-center">
	<h3 class="e-text-color text-bor">Datos de Rastreabilidad</h3>
</div>
<!--- #Datos de rastreabilidad-->
<div class="collapse container-fluid row main col-md-12 ml-sm-auto col-lg-12 py-4" id="px-id">
	<div class="card card-body">
		<!-- #Folio-->
		<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
			<div class="input-group mx-auto">
				<div class="input-group-prepend input-group-prepend col-lg-11  col-md-11 col-sm-11 col-xs-11 mx-auto">
					<span class="input-group-text btn btn-warning text-center e-border" id="basic-addon111">Folio</span>
					<input type="text" name="folio" value="{{$persona->folio}}" disabled="true"
						class="e-border md-textarea form-control lineA btn btn-warning"
						aria-describedby="basic-addon111">
				</div>
			</div>
		</div>

		<!-- #Tipo-->
		<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
			<div class="input-group mx-auto">
				<div class="input-group-prepend input-group-prepend col-lg-11 col-md-11 col-sm-11 col-xs-11 mx-auto">
					<span class="input-group-text btn btn-warning text-center e-border" id="basic-addon112">Tipo de
						Certificación</span>
					<input type="text" name="certificacion" value="{{$persona->certificacion}}" disabled="true"
						class="e-border md-textarea form-control lineA btn btn-warning"
						aria-describedby="basic-addon112">
				</div>
			</div>
		</div>

		<!-- #Temporada de Cosecha--->
		<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
			<div class="input-group mx-auto">
				<div class="input-group-prepend input-group-prepend col-lg-11  col-md-11 col-sm-11 col-xs-11 mx-auto">
					<span class="input-group-text btn btn-warning text-center e-border" id="basic-addon113">Temporada de
						Cosecha</span>
					<input type="text" name="temp_cosecha" value="{{$persona->temp_cosecha}}" disabled="true"
						class="e-border md-textarea form-control lineA btn btn-warning"
						aria-describedby="basic-addon113">
				</div>
			</div>
		</div>

		<!-- #N°-->
		<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
			<div class="input-group mx-auto">
				<div class="input-group-prepend input-group-prepend col-lg-11  col-md-11 col-sm-11 col-xs-11 mx-auto">
					<span class="input-group-text btn btn-warning text-center e-border" id="basic-addon114">N° Colmenas,
						Chapetas</span>
					<input type="text" name="num_colmena" value="{{$persona->num_colmena}}" disabled="true"
						class="e-border md-textarea form-control lineA btn btn-warning"
						aria-describedby="basic-addon114">
				</div>
			</div>
		</div>

		<!-- #UPP-->
		<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
			<div class="input-group mx-auto">
				<div class="input-group-prepend input-group-prepend col-lg-11  col-md-11 col-sm-11 col-xs-11 mx-auto">
					<span class="input-group-text btn btn-warning text-center e-border" id="basic-addon115">UPP</span>
					<input type="text" name="upp" value="{{$persona->upp}}" disabled="true"
						class="e-border md-textarea form-control lineA btn btn-warning"
						aria-describedby="basic-addon115">
				</div>
			</div>
		</div>

		<!-- #PGN-->
		<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
			<div class="input-group mx-auto">
				<div class="input-group-prepend input-group-prepend col-lg-11  col-md-11 col-sm-11 col-xs-11 mx-auto">
					<span class="input-group-text btn btn-warning text-center e-border" id="basic-addon116">PGN</span>
					<input type="text" name="pgn" value="{{$persona->pgn}}" disabled="true"
						class="e-border md-textarea form-control lineA btn btn-warning"
						aria-describedby="basic-addon116">
				</div>
			</div>
		</div>

		<!-- #Producción-->
		<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
			<div class="input-group mx-auto">
				<div class="input-group-prepend input-group-prepend col-lg-11  col-md-11 col-sm-11 col-xs-11 mx-auto">
					<span class="input-group-text btn btn-warning text-center e-border" id="basic-addon117">Producción
						anual</span>
					<input type="text" name="prod_anual" value="{{$persona->prod_anual}}" disabled="true"
						class="e-border md-textarea form-control lineA btn btn-warning"
						aria-describedby="basic-addon117">
				</div>
			</div>
		</div>

		<!-- #Clave-->
		<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
			<div class="input-group mx-auto">
				<div class="input-group-prepend input-group-prepend col-lg-11  col-md-11 col-sm-11 col-xs-11 mx-auto">
					<span class="input-group-text btn btn-warning text-center e-border" id="basic-addon118">Clave de
						Rasteabilidad</span>
					<input type="text" name="clave_rast" value="{{$persona->clave_rast}}" disabled="true"
						class="e-border md-textarea form-control lineA btn btn-warning"
						aria-describedby="basic-addon118">
				</div>
			</div>
		</div>

		<!-- #Localización-->
		<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
			<div class="input-group mx-auto">
				<div class="input-group-prepend input-group-prepend col-lg-11  col-md-11 col-sm-11 col-xs-11 mx-auto">
					<span class="input-group-text btn btn-warning text-center e-border" id="basic-addto119">Localización
						de los Apiarios</span>
					<input type="text" name="loc_api" value="{{$persona->loc_api}}" disabled="true"
						class="e-border md-textarea form-control lineA btn btn-warning"
						aria-describedby="basic-addto119">
				</div>
			</div>
		</div>

		<!-- #Observación-->
		<div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
			<div class="input-group mx-auto">
				<div class="input-group-prepend input-group-prepend col-lg-11 col-md-11 col-sm-11 col-xs-11 mx-auto">
					<span class="input-group-text btn btn-warning text-center e-border"
						id="basic-addon120">Observación</span>
					<input type="text" name="observacion" value="{{$persona->observacion}}" disabled="true"
						class="e-border md-textarea form-control lineA btn btn-warning"
						aria-describedby="basic-addon120">
				</div>
			</div>
		</div>
	</div>
</div>
<?php //#Fin del formulario?>
{!!Form::Close()!!}
<?php //#llamada a las card ?>
<script>
	$('#p-id').collapse();
	$('#px-id').collapse();
</script>
@endsection