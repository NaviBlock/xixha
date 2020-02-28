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
    <h5 class="card-title">Historial de pagos</h5>
    <div class="text-center col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <?php //#incluimos la vista serach para relizar la busqueda en el padron?>
        @include('story.search')
    </div>
</div>
<?php //#Tabla de Resultado?>
<div
    class="rest1 container-fluid table-responsive form-group amber-textarea active-amber-textarea-2 input-group e-border text-center col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto">
    <div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
        <table class="table table-condensed table-sm text-dark table-bordered">
            <thead class="table-color rest2">
                <th scope="col">Folio</th>
                <th scope="col">Nombre</th>
                <th scope="col">Fecha</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Operación</th>
            <tbody class="rest2">
                <?php //#Realizamos un ciclo foreach en la tabla del padron, de un modo sencillo itera sobre arrays que se genera en el controlador, en cada iteración, el valor del elemento actual se asigna a $valor y el puntero interno del array avanza una posicion de cada item de la tabla hasta terminar el ciclo.?>
                <?php //#Inicio del ciclo foreach?>
                @foreach($stories as $per)
                <tr>
                    <td>{{$per->folio}}</td>
                    <td>{{$per->nombre }} {{$per->apellidopa}} {{$per->apellidoma}}</td>
                    <td>{{$per->fechaRegistro }}</td>
                    <td>{{$per->cantidad}}</td>
                    <?php //#Boton Transaccion?>
                    <td><a href="{{URL::action('StoryController@create',$per->idpersona)}}">
                            <button type="button" class="btn btn-primary btn-md">Transacción</button>
                        </a></td>
                </tr>
                <?php //#Fin del ciclo foreach?>
                @endforeach
            </tbody>
        </table>
        <?php //#Renderizamos la tabla con los valores del controlador?>
        {{$stories->render()}}
    </div>
</div>
<?php //#Footer?>
<div class="container foorter-color-e col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto card-footer mx-auto e-alineacion">
    <span class="foorter-color-e">XIXHÁ 2019</span>
</div>
@endsection