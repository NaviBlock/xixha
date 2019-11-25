<!DOCTYPE html>
<html lang="es">
<head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <title>SIPAX</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/iman.css')}}">
    <link rel="stylesheet" href="{{asset('css/estilo.css')}}">    
</head> 
<body id="app-layout">
    <nav class="navbar navbar-expand-lg navbar-dark fondo-e">
        <div  class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="http://xixha.com">
                    <img src="{{asset('img/logos.png')}}" class="e-logo e-img img-responsive center-block" alt="Logo site" style="center">
                <a>
                <button type="button" class="navbar-toggler collapsed justify-content-center e-logo e-t-t" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon e-t-t"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav e-t-t">
                <ul class="navbar-nav ml-auto e-t-t">
                    <li class="nav-item active e-t-t">
                        <a class="nav-link e-texto-one e-texto e-color e-t" href="http://xixha.com">Xixhá</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link e-texto e-color e-t" href="{{asset('register')}}">Registro</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="main-header">
    <div class="background-overlay text-white py-5">
        <div class="container"> 
            <div class="row">
                <div class="col-md-12 text-center justify-content-center align-self-center">
                    <h1 class="e-titulo e-color">Padrón de Apicultores</h1>
                    <div class="col-md-12 col-sm-12 col-lg-12 col-12 col-xl-12"> 
                    <!--a class="navbar-brand e-titulo" href=""-->
                        <img class="e-logo-p img-responsive center-block" src="{{asset('img/sipaxQ.png')}}" alt="Logo site">
                    <!--/a-->
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>    
    <footer>
        <div class="container p-3 text-center text-white">
           <a href="http://xixha.com/">
                <p class="e-titulo e-color">xixhá &copy; 2019</p>
            </a>
        </div>
    </footer>
    <div class="wave">
        <div style="height: 100px; overflow: hidden;"><svg viewBox="0 0 400 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C277.93,134.70 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #FFA000;"></path></svg></div>
    </div>     
    <!--Bootstrap JS-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
