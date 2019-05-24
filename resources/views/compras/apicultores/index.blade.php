@extends ('layouts.admin')
@section ('contenido')
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <h3>Listado de Datos de Apicultores<a href="apicultores/create"><button class="btn btn-success">Nuevo</button></a></h3>
            @include('compras.apicultores.search')
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
                    @foreach($apicultor as $api)
                        <tr>
                            <td>{{ $api->idapicultor }}</td> 
                            <td>{{ $api->nombre }}</td>
                            <td>{{ $api->tipo_documento }}</td>
                            <td>{{ $api->num_documento }}</td>
                            <td>{{ $api->telefono }}</td>
                            <td>{{ $api->email }}</td>
              
                            <td>{{ $api->num_colmena }} </td>
                            <td>{{ $api->geoloc_apiario }} </td>
                            <td>{{ $api->prod_anual }} </td>
                            <td>{{ $api->temp_cosecha }} </td>
                            <td>{{ $api->tipo_certificacion }} </td>
                            <td>{{ $api->mueve_sus_colmena }} </td>
                            <td>{{ $api->a_donde }} </td>
                            <td>{{ $api->observaciones }} </td>
                            <td>{{ $api->upp }} </td>
                            <td>{{ $api->idapicultor }} </td>
                            <td>{{ $api->pgn }} </td>
                            <td>{{ $api->clave_rast }} </td-->

                            <td>
                                <a href="{{URL::action('ApiController@edit',$api->idapicultor)}}"><button class="btn btn-info">Editar</button></a>
                                
                                <a href="" data-target="#modal-delete-{{$api->idapicultor}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
                            </td>
                        </tr>
                        @include('compras.apicultores.modal')
                    @endforeach
                </table>
            </div>
            {{$apicultor->render()}}
        </div> 
    </div>
@endsection