@extends ('layouts.admin')
@section ('contenido')
	<div class = "row"> 
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  mx-auto">
			<h3>Datos del Apicultor: {{$persona->nombre}}</h3>
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
	{!!Form::model($persona,['method'=>'PATCH','route'=>['compras.proveedor.update',$persona->idpersona]]) !!}
	{{Form::token()}}
	<div class="row">
		<div class="container">

			<!---Titulo---->
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto">
				<h3 class="text-center e-text-color">Datos Personales del Apicultor</h3>
			</div>

			<!---Nombre del apicultor---->			
			<br><br>
			<div class="e-border"> 
				<div class="form-group mf-form amber-textarea active-amber-textarea-2 input-group mb-3 e-border text-center">
					
				<div class="input-group-append mx-auto">
						<span class="input-group-text btn btn-warning col-lg-12 col-md-12 col-sm-12 col-xs-12  mx-auto" id="basic-addon101">Folio de: {{$persona->nombre}} {{$persona->apellidopa}} {{$persona->apellidoma}}</span>
					</div>
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
						<br>
						<input type="text" name="folio" value="{{$persona->folio}}" disabled ="true" class="e-border md-textarea form-control lineA" aria-describedby="basic-addon101">
					</div>
				</div>
			</div><br><br>
				
			<!---Estado---->			
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 e-border">		
				<div class="input-group-append">
					<span class="input-group-text btn btn-warning" id="basic-addon102">Estado</span>
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 e-border">		
						<input type="text" name="estadoP" value="{{$persona->estadoP}}" disabled ="true" class="e-border md-textarea form-control-plaintext lineA btn btn-warning " aria-describedby="basic-addon102">			
					</div>
				</div>
			</div><br><br>
			
			<!--Municipio-->
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto e-border">			
				<div class="input-group-append">
					<span class="input-group-text btn btn-warning" id="basic-addon103">Municipio</span>	
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 e-border">				
					<input type="text" name="municipio" value="{{$persona->municipio}}" disabled ="true" class="e-border md-textarea form-control-plaintext lineA" aria-describedby="basic-addon103">
				</div>
			</div><br><br>

			<!--Colonia-->
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto e-border">
				<div class="input-group-append">
					<span class="input-group-text btn btn-warning" id="basic-addon104">Colonia</span>
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 e-border">		
						<input type="text" name="colonia" value="{{$persona->colonia}}" disabled ="true" class="e-border md-textarea form-control-plaintext lineA" aria-describedby="basic-addon104">
					</div>
				</div>
			</div><br><br>

			<!--Calle-->
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  mx-auto e-border">
				<div class="input-group-append">
					<span class="input-group-text btn btn-warning" id="basic-addon105">Calle</span>
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 e-border">	
						<input type="text" name="calle" value="{{$persona->calle}}" disabled ="true" class="e-border md-textarea form-control-plaintext lineA" aria-describedby="basic-addon105">
					</div>
				</div>
			</div><br><br>

			<!--Telefono-->
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  mx-auto e-border">
				<div class="input-group-append">
					<span class="input-group-text btn btn-warning" id="basic-addon106">Telefono</span>
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 e-border">	
						<input type="text" name="telefono" value="{{$persona->telefono}}" disabled ="true" class="e-border md-textarea form-control-plaintext lineA" aria-describedby="basic-addon106">
					</div>
				</div>
			</div><br><br>

			<!--Email-->
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  mx-auto e-border">
				<div class="input-group-append">
					<span class="input-group-text btn btn-warning" id="basic-addon107">Correo electronico</span>
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 e-border">	
						<input type="text" name="email" value="{{$persona->email}}" disabled ="true" class="e-border md-textarea form-control-plaintext lineA" aria-describedby="basic-addon107">
					</div>
				</div>
			</div><br><br>

			<!--Sexo-->
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  mx-auto e-border">
				<div class="input-group-append ">
					<span class="input-group-text btn btn-warning" id="basic-addon108">SEXO</span>		
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 e-border">			
						<input type="text" name="sexo" value="{{$persona->sexo}}" disabled ="true" class="e-border md-textarea form-control-plaintext lineA" aria-describedby="basic-addon108">
					</div>
				</div>
			</div><br><br>

			<!--CURP-->			
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  mx-auto e-border">
				<div class="input-group-append">
					<span class="input-group-text btn btn-warning" id="basic-addon110">CURP</span>		
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 e-border">	
						<input type="text" name="curp" value="{{$persona->curp}}" disabled ="true" class="e-border md-textarea form-control-plaintext lineA" aria-describedby="basic-addon109">		
					</div>
				</div>	
			</div><br><br>

			<!--RFC-->
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  mx-auto e-border">
				<div class="input-group-append">
					<span class="input-group-text btn btn-warning" id="basic-addon2">RFC</span>
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 e-border">				
						<input type="text" name="rfc" value="{{$persona->rfc}}" disabled ="true" class="e-border md-textarea form-control-plaintext lineA" aria-describedby="basic-addon110">
					</div>
				</div>
			</div><br><br>
		
			<!--Titulo de Rastreabilidad-->
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  mx-auto e-border">
				<br><h3 class="text-center">Datos de Rastreabilidad</h3><br>
			</div>

			<!--Folio-->
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  mx-auto e-border">				
				<div class="input-group-append">
					<span class="input-group-text btn btn-warning" id="basic-addon111">Folio</span>
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 e-border">	
						<input type="text" name="folio" value="{{$persona->folio}}" disabled ="true" class="e-border md-textarea form-control-plaintext lineA " aria-describedby="basic-addon111">
					</div>
				</div>
			</div><br><br>
			
			<!--Tipo-->
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  mx-auto e-border">	
				<div class="input-group-append">
					<span class="input-group-text btn btn-warning" id="basic-addon112">Tipo de Certificación</span>
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 e-border">	
						<input type="text" name="certificacion" value="{{$persona->certificacion}}" disabled ="true" class="e-border md-textarea form-control-plaintext lineA " aria-describedby="basic-addon112">
					</div>
				</div>
			</div><br><br>

			<!--Temporada-->
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  mx-auto e-border">	
				<div class="input-group-append">
					<span class="input-group-text btn btn-warning" id="basic-addon113">Temporada de Cosecha</span>
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 e-border">
						<input type="text" name="temp_cosecha" value="{{$persona->temp_cosecha}}" disabled ="true" class="e-border md-textarea form-control-plaintext lineA " aria-describedby="basic-addon113">
					</div>
				</div>
			</div><br><br>

			<!--N°-->
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  mx-auto e-border">				
				<div class="input-group-append">
					<span class="input-group-text btn btn-warning" id="basic-addon114">N° Colmenas, Chapetas</span>
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 e-border">	
						<input type="text" name="num_colmena" value="{{$persona->num_colmena}}" disabled ="true" class="e-border md-textarea form-control-plaintext lineA " aria-describedby="basic-addon114">
					</div>
				</div>
			</div><br><br>
		
			<!--UPP-->
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  mx-auto e-border">				
				<div class="input-group-append">
					<span class="input-group-text btn btn-warning" id="basic-addon115">UPP</span>
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 e-border">	
						<input type="text" name="upp" value="{{$persona->upp}}" disabled ="true" class="e-border md-textarea form-control-plaintext lineA " aria-describedby="basic-addon115">			
					</div>
				</div>
			</div><br><br>
			
			<!--PGN-->
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  mx-auto e-border">	
				<div class="input-group-append">
					<span class="input-group-text btn btn-warning" id="basic-addon116">PGN</span>
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 e-border">	
						<input type="text" name="pgn" value="{{$persona->pgn}}" disabled ="true" class="e-border md-textarea form-control-plaintext lineA " aria-describedby="basic-addon116">	
					</div>						
				</div>
			</div><br><br>
		
			<!--Producción-->
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  mx-auto e-border">		
				<div class="input-group-append">
					<span class="input-group-text btn btn-warning" id="basic-addon117">Producción anual</span>
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 e-border">	
						<input type="text" name="prod_anual" value="{{$persona->prod_anual}}" disabled ="true" class="e-border md-textarea form-control-plaintext lineA " aria-describedby="basic-addon117">
					</div>
				</div>
			</div><br><br>
			
			<!--Clave-->
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  mx-auto e-border">				
				<div class="input-group-append">
					<span class="input-group-text btn btn-warning" id="basic-addon118">Clave de Rasteabilidad</span>
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 e-border">	
						<input type="text" name="clave_rast" value="{{$persona->clave_rast}}" disabled ="true" class="e-border md-textarea form-control-plaintext lineA " aria-describedby="basic-addon118">
					</div>
				</div>
			</div><br><br>

			<!--Localización-->
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  mx-auto e-border">				
				<div class="input-group-append">
					<span class="input-group-text btn btn-warning" id="basic-addto119">Localización de los Apiarios</span>
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 e-border">	
						<input type="text" name="loc_api" value="{{$persona->loc_api}}" disabled ="true" class="e-border md-textarea form-control-plaintext lineA " aria-describedby="basic-addto119">
					</div>
				</div>
			</div><br><br>

			<!--Observación-->
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto e-border">				
				<div class="input-group-append ">
					<span class="input-group-text btn btn-warning" id="basic-addon120">Observación</span>
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 e-border">	
						<input type="text" name="observacion" value="{{$persona->observacion}}" disabled ="true" class="e-border md-textarea form-control-plaintext lineA " aria-describedby="basic-addon120">
					</div>
				</div>
			</div><br><br>

			<!--Tabla--->
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto e-border">				
				<div class="input-group-append ">
					<div class="table-responsive"> 
        				<table class="table table-striped table-hover table-condensed ">
            			<thead class="table-color ">
							<th>No</th>
							<th>Cantidad</th>
							<th>Precio</th>
							<th>Fecha</th>
							<th>Total</th>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>150</td>
								<td>$200.00</td>
								<td>23-23-23</td>
								<td>$200.00</td>
							</tr>
							<tr>
								<td>1</td>
								<td>150</td>
								<td>$200.00</td>
								<td>23-23-23</td>
								<td>$200.00</td>
							</tr>
						</tbody>
						</table>
					</div>
				</div>
			</div><br><br>
		</div>
	</div>
	{!!Form::Close()!!}		
@endsection