
@extends ('layouts.adminuser')
@section ('contenido')

<div class="container-fluid adx">

        <div class="container adx">
            <div class="card col-lg-12 col-md-12 col-sm-12 col-xs-12 border-warning mx-auto"> 
                <div class="card-body text-warning fix-card">
                    <h5 class="card-title">Padrón de Apicultores</h5>
                    <a class="nav-link e-coloresx px-2">Apicultor {{ auth()->user()->name }}</a>
                </div> 
            </div>
        </div>
    
        <div class="container">
            <h2 class="text-center e-text-color">Test Sitio Chat</h2>
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