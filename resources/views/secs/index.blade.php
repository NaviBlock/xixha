  <!--Modal-->  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script--->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <!----------------------------------------------------------------->

@extends ('layouts.admin')
@section ('contenido')
<div class="container-fluid adx">

    <div class="container adx">
        <div class="card col-lg-12 col-md-12 col-sm-12 col-xs-12 border-warning mx-auto"> 
            <div class="card-body text-warning">
                <h5 class="card-title">Roles</h5>
                <a class="nav-link e-coloresx px-2">{{auth()->user()->name}}</a> 
                <div class="text-center">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        @include('secs.search')
                    </div>
                </div> 
            </div>

            <div class="container">
                <div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">                
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
                                        <td>{{ $usu->name}}</td>
                                        <td>{{ $usu->email}}</td>
                                        <td>{{ $usu->rol}}</td>
                                        <td> 
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto py-1">
                                                <div class="btn-group mr-4" role="group" aria-label="Editar">
                                                    <a href="{{URL::action('UsuarioController@edit',$usu->id)}}">
                                                        <button class="btn btn-info">Editar</button>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto py-1">
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
            
            <div class="container">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto">
                        <div class="card-footer mx-auto e-alineacion">
                            <span class="foorter-color-e">XIXHÁ 2019</span>
                        </div>                
                    </div>
                </div>
@endsection 