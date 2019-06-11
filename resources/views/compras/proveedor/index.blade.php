@extends ('layouts.admin')
@section ('contenido')
    <div class="row"> 
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h3 class="text-center">Padrón de Apicultores</h3><br><br>
        </div>
        <div class="text-center col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <a href="{{asset('compras/proveedor/create')}}"><button class="btn btn-success btn-block btn-lg">Nuevo</button></a>
        </div>
        <br><br><br><br>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            @include('compras.proveedor.search')
        </div>
    </div>  
    <div class="row"> 
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive lineA">
			    <table class="table table-striped table-bordered table-condensed table-hover text-center">
				    <thead>
                        <!--th>Folio</th>
                        <th>Perfil</th-->
                        <th>Nombre</th>
                        <th>Dirección</th>
                        <th>Telefono</th>
                        <th>Email</th>
                        <th>Numero de Colmena</th>
                        <th>Producción Anual</th>
                        <th>Tipo Certificación</th>
                        <th>Opciones</th>
                        <!--th>Transacción</th-->
                    </thead>
                    @foreach($personas as $per)
                        <!--tr>ffff
                            <td>{ { $per->folio }}</td>
                            <td>
                                <img src="{ {asset('imagenes/perfil/'.$per->img_perfil)}}" alt="{ {$per->img_perfil}}" height="100px" width="100px" class="img-fluid">
                            </td-->
                            <td>{{ $per->nombre }}</td>
                            <td>{{ $per->direccion }}</td>
                            <td>{{ $per->telefono }}</td>
                            <td>{{ $per->email }}</td>
                            <td>{{ $per->num_colmena }} </td>
                            <td>{{ $per->prod_anual }} </td>
                            <td>{{ $per->certificacion }}</td>
                            <td>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="btn-group mr-4" role="group" aria-label="Boton Editar">
                                    <a href="{{URL::action('ProveedorController@edit',$per->idpersona)}}"><button class="btn btn-primary btn-block">Editar</button></a>
                                </div>
                                <!--div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="btn-group mr-4" role="group" aria-label="Boton apiarios">
                                    <a href="{ {URL::action('ProveedorController@apic',$per->idpersona)}}"><button class="btn btn-primary btn-block">Apiarios</button></a-->
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="btn-group mr-4" role="group" aria-label="Boton Detalles">
                                    <a href="{{URL::action('ProveedorController@show',$per->idpersona)}}"><button class="btn btn-success btn-block">Detalles</button></a>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="btn-group mr-4" role="group" aria-label="Boton de Eliminar">
                                    <a href="" data-target="#modal-delete-{{$per->idpersona}}" data-toggle="modal"><button class="btn btn-danger btn-block">Eliminar</button></a>
                                </div>
                            </div> 
                            </td>
                            <!--td><br>
                                <a href="{ {asset('compras/ingreso')}}"><button class="btn btn-success btn-block">Realizar Transacción</button>
                                </a>
                            </td-->
                        </tr>
                        @include('compras.proveedor.modal')
                    @endforeach
                </table>
            </div>
            {{$personas->render()}}
        </div> 
    </div>
@endsection