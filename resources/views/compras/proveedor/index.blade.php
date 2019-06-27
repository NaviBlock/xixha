@extends ('layouts.admin')
@section ('contenido')
    <div class="row">

        <div class="card col-lg-12 col-md-12 col-sm-12 col-xs-12 border-warning">        
            <div class="card-body text-warning">
                <h5 class="card-title">Padrón de Apicultores.</h5>
                <div class="text-center"> 
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        @include('compras.proveedor.search')
                    </div>     
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 btn"><br>
                        <a href="{{asset('compras/proveedor/create')}}">
                            <button class="btn btn-success">Registro</button>
                        </a>  
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card-footer mx-auto">
                    <span class="text-muted">XIXHÁ 2019</span>
                </div>                

            </div>
        </div>
    </div>

    <div class="table-responsive"> 
        <table class="table table-striped table-hover table-condensed">
            <thead class="table-color">
                <th>Folio</th>
                <th>Perfil</th>
                <th>Nombre Completo</th>
                <th>Estado</th>
                <th>Telefono</th>
                <th>Email</th>                        
                <th>N° Colmenas</th>
                <th>Producción Anual en KG</th>
                <th>Certificación</th>
                <th>Opciones</th>
            </thead>
            <tbody>
                @foreach($personas as $per)
                <tr>
                    <td>{{ $per->folio }}</td>
                    <td>
                        <img src="{{asset('imagenes/perfil/'.$per->img_perfil)}}" alt="{{$per->img_perfil}}" height="100px" width="100px" class="img-fluid">
                    </td>
                    <td>{{ $per->nombre." ".$per->apellidopa." ".$per->apellidoma }}</td>
                    <td>{{ $per->estadoP }}</td>
                    <td>{{ $per->telefono }}</td>
                    <td>{{ $per->email }}</td>
                    <td>{{ $per->num_colmena }}</td>
                    <td>{{ $per->prod_anual."Kg" }}</td>
                    <td>{{ $per->certificacion }}</td>
                    <td class="col-lg-12 col-md-12 col-sm-12 col-xs-12">                            
                        <div>
                            <div class="btn-group mr-4" role="group" aria-label="Boton Detalles">
                                <a href="{{URL::action('ProveedorController@show',$per->idpersona)}}">
                                    <button type="button" class="btn btn-success btn-block">Detalles</button>
                                </a>
                            </div>
                        </div><br>
                        <div>
                            <div class="btn-group mr-4" role="group" aria-label="Boton Editar">
                                <a href="{{URL::action('ProveedorController@edit',$per->idpersona)}}">
                                    <button type="button" class="btn btn-primary btn-block">Editar</button>
                                </a>
                            </div>
                        </div><br>
                        <div>
                            <div class="btn-group mr-4" role="group" aria-label="Boton de Eliminar">
                                <a href="" data-target="#modal-delete-{{$per->idpersona}}" data-toggle="modal">
                                    <button type="button" class="btn btn-danger btn-block">Eliminar</button>
                                </a>
                            </div>                                
                        </div> 
                    </td>
                </tr>
                @include('compras.proveedor.modal')
                @endforeach
            </tbody>
        </table>
        {{$personas->render()}}
    </div>
    
@endsection