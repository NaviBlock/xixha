@extends ('layouts.admin')
@section ('contenido')
<div class="container-fluid"> 
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<br><br>
			<h3 class="text-center">Alta del Apicultor</h3>
			<br>
			@if(count($errors)>0)
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{$error}}</li>
						@endforeach
					</ul> 
				</div>
			@endif  
			{!!Form::open(array('url'=>'compras/proveedor','method'=>'POST','autocomplete'=>'off'))!!}
			{{Form::token()}}	
			<div class="form-group mf-form amber-textarea active-amber-textarea-2 input-group mb-3">
				<div class="aol input-group-prepend col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<span class="input-group-text" id="basic-addon2">Nombre del Apicultor</span>
					
					<input type="text" name="nombre" required value="{{old('nombre')}}" class="md-textarea form-control lineA " placeholder="Nombre..." aria-describedby="basic-addon2">

					<input type="text" name="apellidopa" required value="{{old('apellidopa')}}" class="md-textarea form-control lineA " placeholder="Apellido Parteno..." aria-describedby="basic-addon2">

					<input type="text" name="apellidoma" required value="{{old('apellidoma')}}" class="md-textarea form-control lineA " placeholder="Apellido Marteno..." aria-describedby="basic-addon2">
				</div>
			</div>
			<!--div class="form-group mf-form amber-textarea active-amber-textarea-2 input-group mb-3">
				<input type="text" name="apellidopa" required value="{{old('apellidopa')}}" class="md-textarea form-control lineA " placeholder="Apellido Parteno..." aria-describedby="basic-addon2">
				<div class="input-group-append">
					<span class="input-group-text" id="basic-addon2">Apellido Parteno</span>
				</div>

				<input type="text" name="apellidoma" required value="{{old('apellidoma')}}" class="md-textarea form-control lineA " placeholder="Apellido Marteno..." aria-describedby="basic-addon2">
				<div class="input-group-append">
					<span class="input-group-text" id="basic-addon2">Apellido Marteno</span>
				</div>
			</div-->

			<div class="form-group mf-form amber-textarea active-amber-textarea-2 input-group mb-3">
				<input type="text" name="curp" pattern="[0-9,a-z,A-Z]{18}" value="{{old('curp')}}" id="curp" class="md-textarea form-control lineA" placeholder="CURP...">
				<div class="input-group-append">
					<span class="input-group-text" id="basic-addon2">CURP 18 caracteres</span>
				</div>
			</div>

			<div class="form-group mf-form amber-textarea active-amber-textarea-2 input-group mb-3">	
				<input type="text" name="direccion" value="{{old('direccion')}}" class="md-textarea form-control lineA" placeholder="Dirección...">
				<div class="input-group-append">
					<span class="input-group-text" id="basic-addon2">Dirección Completa</span>
				</div>
			</div>

			<div class="form-group mf-form amber-textarea active-amber-textarea-2 input-group mb-3">	
			<div class="input-group-append">
					<span class="input-group-text" id="basic-addon2">Teléfono 10 Dígitos</span>
				</div>	
				<input type="tel" name="telefono" pattern="[0-9]{10}" value="{{old('telefono')}}" class="md-textarea form-control lineA" placeholder="Teléfono...">
			</div>

			<!--div class="form-group mf-form amber-textarea active-amber-textarea-2 input-group mb-3"-->
			<div class="input-group flex-nowrap">
				<div class="input-group-prepend">
					<!--small id="emailHelp" class="form-text text-muted"></small-->
					<span class="input-group-text" id="email">@</span>
				</div>

				<input type="text" name="email" value="{{old('email')}}" id="email" class="md-textarea form-control lineA" placeholder="Correo Electronico..." aria-label="Username" aria-describedby="addon-wrapping">
			</div>

			<div><br><br><h3 class="text-center">Datos de Rastreabilidad</h3></div>
			<br>
			<div class="form-group mf-form amber-textarea active-amber-textarea-2 input-group mb-3">	
				<input type="text" name="certificacion" value="{{old('certificacion')}}" class="md-textarea form-control lineB" placeholder="Tipo de Certificación...">
				<div class="input-group-append">
					<span class="input-group-text" id="basic-addon2">Tipo de Certificación</span>
				</div>
			</div>

			<div class="form-group mf-form amber-textarea active-amber-textarea-2 input-group mb-3">
			<div class="input-group-append">
					<span class="input-group-text" id="basic-addon2">Clave de Rasteabilidad</span>
				</div>	
				<input type="text" name="clave_rast" value="{{old('clave_rast')}}" class="md-textarea form-control lineB" placeholder="Clave de Rasteabilidad...">

				<div class="input-group-append">
					<span class="input-group-text" id="basic-addon2">UPP</span>
				</div>
				<input type="text" name="upp" value="{{old('upp')}}" class="md-textarea form-control lineB" placeholder="UPP...">

				<div class="input-group-append">
					<span class="input-group-text" id="basic-addon2">PGN</span>
				</div>			
				<input type="text" name="pgn" value="{{old('pgn')}}" class="md-textarea form-control lineB" placeholder="PGN...">
			</div>			

			<div class="form-group mf-form amber-textarea active-amber-textarea-2 input-group mb-3">	
				<input type="text" name="prod_anual" value="{{old('prod_anual')}}" class="md-textarea form-control lineB" placeholder="Producción anual...">
				<div class="input-group-append">
					<span class="input-group-text" id="basic-addon2">Producción Anual en Kg</span>
				</div>
				<input type="text" name="num_colmena" value="{{old('num_colmena')}}" class="md-textarea form-control lineB" placeholder="Numero de Colmena...">
				<div class="input-group-append">
					<span class="input-group-text" id="basic-addon2">Numeros de Colmenas</span>
				</div>
			</div>

			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 input-group mb-3 aol">
				<div class="input-group-prepend">
					<span class="input-group-text" id="basic-addon2 text-center" for="inputGroupSelect01">Temporada de Cosecha</span>
				</div>	
				<select class="custom-select" id="inputGroupSelect01">
					<option name="temp_cosecha" value="{{old('temp_cosecha')}}" class="md-textarea form-control lineB">primavera</option>
					<option name="temp_cosecha" value="{{old('temp_cosecha')}}" class="md-textarea form-control lineB">verano</option>
					<option name="temp_cosecha" value="{{old('temp_cosecha')}}" class="md-textarea form-control lineB">otoño</option>
					<option name="temp_cosecha" value="{{old('temp_cosecha')}}" class="md-textarea form-control lineB">invierno</option>
				</select>
			</div>
			<div><br><br><h3 class="text-center">Localizacion de los Apiarios</h3></div>
			<br><br>
<!--------------------------------------------------------------------------------------------------------------->
			<div class="form-group mf-form amber-textarea active-amber-textarea-2 input-group mb-3">
				<table class="table">
					<thead>
						<tr>
							<!--th>id</th-->
							<th>Localizacion</th>
							<th>¿Movio sus Apiarios?
								
							</th>
							<th>comentario</th>
							<th>observaciones</th>
						</tr>
					</thead>
					<td>test1</td>
					<td>
						<select class="custom-select" id="mov_sele">
							<option value="si">si</option>
							<option value="no">no</option>
						</select></td>
					<td>test1</td>
					<td>test1</td>
					<td>test1</td>


					<td>test1</td>
					<td>
						<select class="custom-select" id="mov_sele">
							<option value="si">si</option>
							<option value="no">no</option>
						</select></td>
					<td>test1</td>
					<td>test1</td>
					<td>test1</td>


					<td>test1</td>
					<td>
						<select class="custom-select" id="mov_sele">
							<option value="si">si</option>
							<option value="no">no</option>
						</select></td>
					<td>test1</td>
					<td>test1</td>
					<td>test1</td>

					
				</table>
				</div>
			</div>
<!--------------------------------------------------------------------------------------------------------------->
			<!--
									<td>{ { $reg->idapiarios }}</td>
									<td>{ { $reg->loc_api }}</td>
									<td>{ { $reg->mov_api }}</td>
									<td>{ { $reg->observacion }}</td>
								-->

								<!--</*?php
									$host = 'localhost';
									$basededatos = 'dbconnectx';
									$usuario = 'root';
									$contraseña = '';

									$conexion = new mysqli($host, $usuario,$contraseña, $basededatos);
									if ($conexion -> connect_errno) {
									die( "Fallo la conexión : (" . $conexion -> mysqli_connect_errno() 
									. ") " . $conexion -> mysqli_connect_error());
									}
									$reg="SELECT * FROM apiarios order by idapiarios";
									$query= $conexion->query($reg);

									foreach ($personas as $per) {
										echo '<tr>
										<td>'.$per['idapiarios'].'</td>
										<td>'.$per['loc_api'].'</td>
										<td>'.$per['mov_api'].'</td>
										<td>'.$per['observacion'].'</td>
									</tr>';
									}
								?>
							</table>
								<form method="post">
									<h3 class="bg-primary text-center pad-basic no-btm">Agregar</h3>
									<table class="table bg-info"  id="tabla">
										<tr class="fila-fija">
											<td><input name="idapiarios[]" placeholder="ID"/></td>
											<td><input name="loc_api[]" placeholder="Localización del apiario"/></td>
											<td><input name="mov_api[]" placeholder="Si o No, lo Movio"/></td>
											<td><input name="observacion[]" placeholder="Observaciones"/></td>
											<td class="eliminar"><input type="button"   value="Menos -"/></td>
										</tr>
									</table>
									<div class="btn-der">
										<input type="submit" name="insertar" value="Insertar" class="btn btn-info"/>
										<button id="adicional" name="adicional" type="button" class="btn btn-warning"> Más + </button>
									</div>
								</form>
								<! ?php
									//////////////////////// PRESIONAR EL BOTÓN //////////////////////////
									if(isset($_POST['insertar']))
									{
										$items1 = ($_POST['idapiarios']);
										$items2 = ($_POST['loc_api']);
										$items3 = ($_POST['mov_api']);
										$items4 = ($_POST['observacion']);			 
									///////////// SEPARAR VALORES DE ARRAYS, EN ESTE CASO SON 4 ARRAYS UNO POR CADA INPUT (ID, NOMBRE, CARRERA Y GRUPO////////////////////)
									while(true) {
										//// RECUPERAR LOS VALORES DE LOS ARREGLOS ////////
										$item1 = current($items1);
										$item2 = current($items2);
										$item3 = current($items3);
										$item4 = current($items4);
										////// ASIGNARLOS A VARIABLES ///////////////////
										$ida=(( $item1 !== false) ? $item1 : ", &nbsp;");
										$loc=(( $item2 !== false) ? $item2 : ", &nbsp;");
										$mov=(( $item3 !== false) ? $item3 : ", &nbsp;");
										$com=(( $item4 !== false) ? $item4 : ", &nbsp;");
										//// CONCATENAR LOS VALORES EN ORDEN PARA SU FUTURA INSERCIÓN ////////
										$valores='('.$ida.',"'.$loc.'","'.$mov.'","'.$com.'"),';
										//////// YA QUE TERMINA CON COMA CADA FILA, SE RESTA CON LA FUNCIÓN SUBSTR EN LA ULTIMA FILA /////////////////////
										$valoresQ= substr($valores, 0, -1);				    
										///////// QUERY DE INSERCIÓN ////////////////////////////
										$sql = "INSERT INTO apiarios (id_apiarios, loc_api, mov_api, observacion) 
										VALUES $valoresQ";
										$sqlRes=$conexion->query($sql) or mysql_error();				    
										// Up! Next Value
										$item1 = next( $items1 );
										$item2 = next( $items2 );
										$item3 = next( $items3 );
										$item4 = next( $items4 );				    
										// Check terminator
										if($item1 === false && $item2 === false && $item3 === false && $item4 === false) break;    
										}		
									}
									</div>
								?-->
								
									<!--/div-->
									<!--div class="form-group mf-form amber-textarea active-amber-textarea-2 input-group mb-3">
										<input type="text" name="loc_api" value="{ {old('loc_api')}}" class="md-textarea form-control lineB" placeholder="Localización de Apiarios...">
									</div-->
									<!--<div class="form-group mf-form amber-textarea active-amber-textarea-2 input-group mb-3">
										<input type="text" name="num_loc_api" value="{ {old('loc_api')}}" class="md-textarea form-control lineB" placeholder="Localización de Apiarios...">
										<div class="input-group-append">
											<span class="input-group-text" id="basic-addon2">Localización de Apiarios</span>
										</div>
									</div>--->
									<!--div class="text-center col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<h3>Listado de Apiarios</h3>
									</div>
									</div class="table-responsible col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<table class="table table-bordered table-hover table-condensed">
											<thead>
												<tr>
													<th>Localización del Apiario</th>
													<th><¿Movió sus Colmenas?/th>
													<th>Observaciones</th>
													<th>Opcion</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<th>Localización del Apiario<input type="text" for="loc_api" name="loc_api" id="loc_api"></th>
													<th><¿Movió sus Colmenas?<input type="text" for="mov_col" name="mov_col" id="mov_col"></th>
													<th>Observaciones<input type="text"  for="observacion" name="observacion" id="observacion"></th>
													<th>Opcion</th>
												</tr>
											</tbody>
										</table>
									</div-->
							<!--@push('scripts')
							<script>			
								$(function(){
									// Clona la fila oculta que tiene los campos base, y la agrega al final de la tabla
									$("#adicional").on('click', function(){
										$("#tabla tbody tr:eq(0)").clone().removeClass('fila-fija').appendTo("#tabla");
									});
								
									// Evento que selecciona la fila y la elimina 
									$(document).on("click",".eliminar",function(){
										var parent = $(this).parents().get(0);
										$(parent).remove();
									});
								});
							</script>
			@endpush-->	
<!--------------------------------------------------------------------------------------------------------------->
			</div>
			<div class="form-group mf-form amber-textarea active-amber-textarea-2">			
				<button class="btn btn-primary btn-block btn-lg" type="submit">Guardar</button><br>
				<button class="btn btn-danger btn-block btn-lg" type="reset">Cancelar</button>
			</div>
		</div>
		{!!Form::Close()!!}	
	</div> 
</div>
@endsection