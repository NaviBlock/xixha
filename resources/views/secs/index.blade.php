@extends ('layouts.admin')
@section ('contenido')

<!-- #Text Rol-->
<div
    class="rest1 container-fluid adx fix-autoE card col-lg-12 col-md-12 col-sm-12 col-xs-12 border-warning mx-auto card-body text-warning">
    <h5 class="card-title">Roles</h5>
    <a class="nav-link e-coloresx px-2">{{auth()->user()->name}}</a>
    <div class="text-center">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            @include('secs.search')
        </div>
    </div>
</div>

<!-- #Tabla de Resultado-->
<div
    class="rest1 container-fluid table-responsive form-group amber-textarea active-amber-textarea-2 input-group e-border text-center col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto">
    <table class="table table-condensed table-sm text-dark table-bordered">
        <thead class="table-color rest2">
            <th scope="col">Nombre</th>
            <th scope="col">Email</th>
            <th scope="col">Rol</th>
            <th scope="col">Token</th>
            <th scope="col">Opciones</th>
        </thead>
        <tbody class="rest2">
            @foreach ($usuario as $usu)
            <tr>
                <td>{{ $usu->name}}</td>
                <td>{{ $usu->email}}</td>
                <td>{{ $usu->rol}}</td>
                <td>{{ $usu->is_admin}}</td>
                <td>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto py-1">
                        <div class="btn-group mr-4" role="group" aria-label="Boton Editar">
                            <a href="{{URL::action('UsuarioController@edit',$usu->id)}}">
                                <button type="button" class="btn btn-primary btn-block">Editar</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto py-1">
                        <div class="btn-group mr-4" role="group" aria-label="Boton de Eliminar">
                            <a href="" data-target="#modal-delete-{{$usu->id}}" data-toggle="modal">
                                <button type="button" class="btn btn-danger btn-block">Eliminar</button>
                            </a>
                        </div>
                    </div>
                </td>
            </tr>
            @include('secs.modal')
            @endforeach
        <tbody>
    </table>
    {{$usuario->render()}}
</div>

<!-- #Footer-->
<div class="container foorter-color-e col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto card-footer mx-auto e-alineacion">
    <span>XIXHÁ 2019</span>
</div>
@endsection