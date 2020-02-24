@extends ('layouts.adminuser')
@section ('contenido')
<!-- #Buscador-->
<div
    class="rest1 container-fluid adx fix-autoE card col-lg-12 col-md-12 col-sm-12 col-xs-12 border-warning mx-auto card-body text-warning">
    <h5 class="card-title">Padrón de Apicultores</h5>
    <!-- #llamamos por medio de middleware el nombre del usuario-->
    <a class="nav-link e-coloresx px-2">{{auth()->user()->name}}</a>
    <!-- #llamamos nuestro modulo serach que esta en la carpeta users-->
    @include('users.search')
</div>

<!-- #Tabla de Resultado-->
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
            <!-- #Realizamos un ciclo foreach que itera en la base de datos, 
                  en donde cada iteracion llama alcontrolador regresando en 
                  la tabla resutado-->
            @foreach($personas as $per)
            <tr><!--#Variable de interación, valor-->
                <td scope="row">{{ $per->folio }}</td>
                <td>{{ $per->nombre." ".$per->apellidopa." ".$per->apellidoma }}</td>
                <td>{{ $per->email }}</td>
                <td>{{ $per->num_colmena }}</td>
                <td>{{ $per->prod_anual." Kg" }}</td>
                <td>{{ $per->certificacion }}</td>
            </tr>
            <!-- #Fin del ciclo foreach-->
            @endforeach
        </tbody>
    </table>
    <!-- #renderizamos la tabla-->
    {{$personas->render()}}
</div>

<!-- #Footer-->
<div class="container foorter-color-e col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto card-footer mx-auto e-alineacion">
    <span>XIXHÁ 2019</span>
</div>
@endsection