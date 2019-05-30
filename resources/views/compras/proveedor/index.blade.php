@extends ('layouts.admin')
@section ('contenido')
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <h3>Listado de Apicultores<a href="proveedor/create"><button class="btn btn-success">Nuevo</button></a></h3>
            @include('compras.proveedor.search')
        </div> 
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive">
			    <table class="table table-striped table-bordered table-condensed table-hover">
				    <thead>
                        <th>Folio</th>
                        <th>Perfil</th>
                        <th>Nombre</th>
                        <th>Dirección</th>
                        <th>Telefono</th>
                        <th>Email</th>
                        <th>Numero de Colmena</th>
                        <th>Producción Anual</th>
                        <th>Tipo Certificación</th>
                        <th>Opciones</th>
                        <th>Transacción</th>
                    </thead> 
                    @foreach($personas as $per)
                        <tr>
                            <td>{{ $per->folio }}</td>
                            <td>{{ $per->img_perfil }}</td>
                            <td>{{ $per->nombre }}</td>
                            <td>{{ $per->direccion }}</td>
                            <td>{{ $per->telefono }}</td>
                            <td>{{ $per->email }}</td>
                            <td>{{ $per->num_colmena }} </td>
                            <td>{{ $per->prod_anual }} </td>
                            <td>{{ $per->tipo_certifcacion }} </td>
                       
                            <td>
                                <a href="{{URL::action('ProveedorController@edit',$per->idpersona)}}"><button class="btn btn-info btn-block">Detalles</button></a>
                                <br>
                                <a href="" data-target="#modal-delete-{{$per->idpersona}}" data-toggle="modal"><button class="btn btn-danger btn-block">Eliminar</button></a>
                            </td>
                            <td>
                                <br>
                                    <a href="{{asset('compras/ingreso')}}"><button class="btn btn-success btn-block">Realizar Transacción</button>
                                </a>
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