@extends ('layouts.admin')
@section ('contenido')
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <h3>Listado de Proveedores<a href="proveedor/create"><button class="btn btn-success">Nuevo</button></a></h3>
            @include('compras.proveedor.search')
        </div> 
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive">
			    <table class="table table-striped table-bordered table-condensed table-hover">
				    <thead>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Tipo Doc</th>
                        <th>Numero Doc</th>
                        <th>direccion</th>
                        <th>Telefono</th>
                        <th>Email</th>
                        <th>num_colmena</th>
                        <th>geoloc_apiario</th>
                        <th>prod_anual</th>
                        <th>temp_cosech</th>
                        <th>tipo_certificacion</th>
                        <th>mueve_sus_colmena</th>
                        <th>a_donde</th>
                        <th>observaciones</th>
                        <th>upp</th>
                        <th>pgn</th>
                        <th>clave_rast</th>
                        <th>Opciones</th>
                    </thead> 
                    @foreach($personas as $per)
                        <tr>
                            <td>{{ $per->idpersona }}</td> 
                            <td>{{ $per->nombre }}</td>
                            <td>{{ $per->tipo_documento }}</td>
                            <td>{{ $per->num_documento }}</td>
                            <td>{{ $per->direccion }}</td>
                            <td>{{ $per->telefono }}</td>
                            <td>{{ $per->email }}</td>
                            <td>{{ $per->num_colmena }} </td>
                            <td>{{ $per->geoloc_apiario }} </td>
                            <td>{{ $per->prod_anual }} </td>
                            <td>{{ $per->temp_cosecha }} </td>
                            <td>{{ $per->tipo_certifcacion }} </td>
                            <td>{{ $per->mueve_sus_colmena }} </td>
                            <td>{{ $per->a_donde }} </td>
                            <td>{{ $per->observaciones }} </td>
                            <td>{{ $per->upp }} </td>
                            <td>{{ $per->pgn }} </td>
                            <td>{{ $per->clave_rast }} </td>
                            <td>
                                <a href="{{URL::action('ProveedorController@edit',$per->idpersona)}}"><button class="btn btn-info">Editar</button></a>
                                <a href="" data-target="#modal-delete-{{$per->idpersona}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
                            </td>
                        </tr>
                        @include('compras.proveedor.modal')
                    @endforeach
                </table>
            </div>
            {{$personas->render()}}
        </div> 
    </div>
@endsection