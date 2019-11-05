@extends ('layouts.adminuser')
@section ('contenido')
<div class="container-fluid adx">

    <div class="container adx">
        <div class="card col-lg-12 col-md-12 col-sm-12 col-xs-12 border-warning mx-auto"> 
            <div class="card-body text-warning">
                <h5 class="card-title">Email: {{auth()->user()->email}}</h5>
                <a class="nav-link e-coloresx px-2">Historial de Pagos a Apicultores</a>
                <a class="nav-link e-coloresx px-2">Supervisor: {{auth()->user()->name }}</a>                
                <div class="text-center">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        @include('banx.search')
                    </div>
                </div>
            </div> 
        </div> 
    </div>
    
    <div class="container">
        <div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto">
                <div class="table-responsive "> 
                    <table class="table table-hover table-condensed table-sm text-dark table-bordered">
                        <thead class="table-color">                                       
                            <th scope="col">fecha</th>
                            <th scope="col">Nombre Completo</th>
                            <th scope="col">Clave</th>
                            <th scope="col">Nombre del Banco</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Acceso a tóken</th>
                            <th scope="col">Rol</th>                        
                            <th scope="col">Tóken</th>
                        </thead>
                        <tbody>
                        <tbody>
                    </table>
                    {{$personas->render()}}
                </div>
            </div>
        </div>                
    </div>
    
    <div class="container">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto">
            <div class="card-footer mx-auto e-alineacion">
                <span class="foorter-color-e">&copy;XIXHÁ 2019</span>
            </div>                
        </div>
    </div>
</div>
@endsection