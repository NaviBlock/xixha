<?php/*
|--------------------------------------------------------------------------
| Vista users/padron
|--------------------------------------------------------------------------
| En esta vista llamamos al contenido de la vista search y realizamos un 
| ciclo foreach para buscar cada elemento de la tabla
| 
*/?>

@extends ('layouts.adminuser')
@section ('contenido')
<?php //#Buscador?>
<div
    class="rest1 container-fluid adx fix-autoE card col-lg-12 col-md-12 col-sm-12 col-xs-12 border-warning mx-auto card-body text-warning">
    <h5 class="card-title">Padrón de Apicultores</h5>
    <?php //#llamamos por medio de middleware el name del usuario?>
    <a class="nav-link e-coloresx px-2">{{auth()->user()->name}}</a>
    <?php //#incluimos la vista serach para relizar la busqueda en el padron?>
    @include('users.search')
</div>
<?php //#Tabla de Resultado?>
<div
    class="rest1 container-fluid table-responsive form-group amber-textarea active-amber-textarea-2 input-group e-border text-center col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto">
    <table class="table table-condensed table-sm text-dark table-bordered">
        <thead class="table-color rest2">
            <!--th scope="col">Perfil</th-->
            <th scope="col">Folio</th>
            <th scope="col">Nombre Completo</th>
            <th scope="col">Email</th>
            <th scope="col">N° Colmenas</th>
            <th scope="col">Producción Anual</th>
            <th scope="col">Certificación</th>
        </thead>
        <tbody class="rest2">
            <?php //#Realizamos un ciclo foreach en la tabla del padron, de un modo sencillo itera sobre arrays que se genera en el controlador, en cada iteración, el valor del elemento actual se asigna a $valor y el puntero interno del array avanza una posicion de cada item de la tabla hasta terminar el ciclo.?>
            <?php //#Inicio del ciclo foreach?>
            @foreach($personas as $per)
            <tr>
                <td scope="row">{{ $per->folio }}</td>
                <td>{{ $per->nombre." ".$per->apellidopa." ".$per->apellidoma }}</td>
                <td>{{ $per->email }}</td>
                <td>{{ $per->num_colmena }}</td>
                <td>{{ $per->prod_anual." Kg" }}</td>
                <td>{{ $per->certificacion }}</td>
            </tr>
            <?php //#Fin del ciclo foreach?>
            @endforeach
        </tbody>
    </table>
    <?php //#Renderizamos la tabla con los valores del controlador?>
    {{$personas->render()}}
</div>
<?php //#Footer?>
<div class="container foorter-color-e col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto card-footer mx-auto e-alineacion">
    <span>XIXHÁ 2019</span>
</div>
@endsection