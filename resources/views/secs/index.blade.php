<?php/*
|--------------------------------------------------------------------------
| Vista story/index
|--------------------------------------------------------------------------
| En esta vista llamamos al contenido de la vista search y realizamos un 
| ciclo foreach para buscar cada elemento de la tabla
| 
*/?>
@extends ('layouts.admin')
@section ('contenido')
<?php //#Buscador?>
<div
    class="rest1 container-fluid adx fix-autoE card col-lg-12 col-md-12 col-sm-12 col-xs-12 border-warning mx-auto card-body text-warning">
    <h5 class="card-title">Roles</h5>
    <a class="nav-link e-coloresx px-2">{{auth()->user()->name}}</a>
    <div class="text-center">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <?php //#incluimos la vista serach para relizar la busqueda en el padron?>
            @include('secs.search')
        </div>
    </div>
</div>
<?php //#Tabla de Resultado?>
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
            <?php //#Realizamos un ciclo foreach en la tabla del padron, de un modo sencillo itera sobre arrays que se genera en el controlador, en cada iteración, el valor del elemento actual se asigna a $valor y el puntero interno del array avanza una posicion de cada item de la tabla hasta terminar el ciclo.?>
            <?php //#Inicio del ciclo foreach?>
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
            <?php //#Se include un modal para realizar la llamada de eliminacion po medio del $id?>
            @include('secs.modal')
            <?php //#Fin del ciclo foreach?>
            @endforeach
        <tbody>
    </table>
    <?php //#Renderizamos la tabla con los valores del controlador?>
    {{$usuario->render()}}
</div>
<?php //#Footer?>
<div class="container foorter-color-e col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto card-footer mx-auto e-alineacion">
    <span>XIXHÁ 2019</span>
</div>
@endsection