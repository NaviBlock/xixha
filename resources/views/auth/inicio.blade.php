<!DOCTYPE html>
<html lang="es">    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIPAX</title>
    <!--EStilos--> 
    <link rel="stylesheet" href="{{asset('css/estilo.css')}}">
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>    
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/"><img src="{{asset('img/logos.png')}}" style="width:20%" alt="Logo site"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="http://xixha.com">Xixhá</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{asset('register')}}">Registro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{asset('login')}}">Iniciar Sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="main-header">
    <div class="background-overlay text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center justify-content-center align-self-center">
                    <h1 class="e-titulo">Municipio de Apicultores Activo</h1>
                    <div class="table-responsive">    
                        @yield('contenido')
                    </div>
                </div>
                <div class="col-md-6 text-center py-2">                
                    <img src="{{asset('img/mapa.png')}}" alt="Logo Estado" class="img-fluid e-mapa">     
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="container p-3 text-center text-white">
            <p>xixhá &copy; 2019</p>
        </div>
    </footer>
    </header>
    <div class="wave">
        <div style="height: 150px; overflow: hidden;"><svg viewBox="0 0 400 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C277.93,134.70 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path></svg></div>
    </div> 
    <!--Bootstrap JS-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>