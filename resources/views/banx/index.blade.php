@extends ('layouts.banx')
@section ('contenido')

<!-- #Tabla de Resultado-->
<div class="rest1 container-fluid table-responsive form-group amber-textarea active-amber-textarea-2 input-group e-border text-center col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto">
    <table class="table table-condensed table-sm text-dark table-bordered">
        <thead class="table-color rest2">
                <th scope="col">fecha</th>
                <th scope="col">Nombre Completo</th>
                <th scope="col">Clave</th>
                <th scope="col">Nombre del Banco</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Token del administrador</th>
                <th scope="col">Rol</th>
                <th scope="col">Tóken</th>
            </thead>            
            @foreach($banx as $bx)
            <tbody class="rest2">
                
                <td scope="row">{{$bx->fecha}}</td>
                <td scope="row">{{$bx->name_user}}</td>
                <td scope="row">{{$bx->clave}}</td>
                <td scope="row">{{$bx->banco}}</td>
                <td scope="row">{{$bx->cantidad}}</td>
                <td scope="row">{{$bx->token}}</td>
                <td scope="row">{{$bx->rol}}</td>
                <td scope="row">{{$bx->token}}</td>
                
            <tbody>
                @endforeach
        </table>
        {{$banx->render()}}
    </div>
</div>

<div class="container foorter-color-e col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto card-footer mx-auto e-alineacion">
    <span>&copy;XIXHÁ 2019</span>
</div>
@endsection