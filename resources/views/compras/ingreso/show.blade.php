@extends ('layouts.admin')
@section ('contenido')
    <div class="row">
	    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
			<div class="form-group">
				<label class="text-light bg-dark" for="proveedor">Proveedor</label>
                <p class="text-primary">{{$ingreso->nombre}}</p>
			</div>
        </div>
		<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
		    <div class="form-group">
			    <label class="text-light bg-dark" for="tipo_comprobante">Tipo de Comprobante</label>
                <p class="text-primary">{{$ingreso->tipo_comprobante}}</p>
			</div>
		</div> 
		<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
			<div class="form-group">
				<label  class="text-light bg-dark" for="serie_comprobante">Serie Comprobante</label>
				<p class="text-primary">{{$ingreso->serie_comprobante}}</p>
			</div>
        </div>
        
		<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
            <div class="form-group">
                <label class="text-light bg-dark" for="num_comprobante">Numero Comprobante</label>
                <p class="text-primary">{{$ingreso->num_comprobante}}</p >
            </div>
        </div>
    </div>

	<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
		<div class="table-responsive">
    		<table id="detalles" class="table table-striped table-bordered table-condensed table-hover">
				<thead style="background-color:#A9D0F5">
					<th>Artículo</th>
					<th>Cantidad</th>
					<th>Precio Compra</th>
					<th>Precio Venta</th>
					<th>Subtotal</th>
				</thead>
				<tfoot>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
                    <th>
                    	<h4 id="total">{{$ingreso->total}}</h4>
                    </th>
				</tfoot>
				<tbody>
                	@foreach ($detalles as $det)
                    	<tr>
                        	<td>{{$det->articulo}}</td>
                            <td>{{$det->cantidad}}</td>
                            <td>{{$det->precio_compra}}</td>
                            <td>{{$det->precio_venta}}</td>
                            <td>{{$det->cantidad*$det->precio_compra}}</td>
                        </tr>
                    @endforeach
				</tbody>
			</table>
        </div>
	</div>
@endsection