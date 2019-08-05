@extends ('layouts.admin')
@section ('contenido')
<div class="row">
    <div class="container-fluid">
        <div class="card col-lg-12 col-md-12 col-sm-12 col-xs-12 border-warning mx-auto"> 
            <div class="card-body text-warning">
                <h5 class="card-title">Roles</h5>
                <div class="text-center">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        @include('secs.search')
                    </div>
                </div>
            </div>
            <div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
				<div class="input-group mx-auto">
					<div class="mx-auto">
					    <div class="input-group-prepend">
						    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto">
                                <div class="table-responsive "> 
                                    <table class="table table-hover table-condensed table-sm text-dark table-bordered">
                                        <thead class="table-color">
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Rol</th>
                                            <th scope="col">Opciones</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($usuarios as $usu)
                                            <tr>
                                                <td scope="row">{{ $usu->name}}</td>
                                                <td scope="row">{{ $usu->email}}</td>
                                                <td scope="row">{{ $usu->rol}}</td>
                                                <td class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto">
                                                    <div>
                                                        <div class="btn-group mr-4" role="group" aria-label="Editar">
                                                            <a href="{{URL::action('UsuarioController@edit',$usu->id)}}">
                                                                <button class="btn btn-info">Editar</button>
                                                            </a>
                                                        </div><br><br>
                                                        <div class="btn-group mr-4" role="group" aria-label="Boton Detalles">
                                                            <a href="" data-target="#modal-delete-{{$usu->id}}" data-toggle="modal">
                                                                <button class="btn btn-danger">Eliminar</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @include('secs.modal')
                                        @endforeach
                                        <tbody>
                                    </table>
                                    {{$usuarios->render()}}
                                </div>
                            </div> 
                        </div>
                    </div>
        </div>
@endsection 