<!DOCTYPE html>
<html lang="es"> 
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Sipax, Xixhá">
  <meta name="author" content="Alejandro Hernández Valle">
  <meta name="generator" content="Sipax, Xixhá">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SIPAX</title>
  <link href="{{asset('css/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/iman.css')}}">
  <link rel="stylesheet" href="{{asset('css/e-estilo.css')}}">
  
  <!--link rel="stylesheet" href="{{asset('css/estilo.css')}}"-->
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
  <script type="text/javascript" src="https://blockchain.info/Resources/js/pay-now-button.js"></script>

  <style> 
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>  
    <link href="{{asset('css/cssx/jumbotron.css')}}" rel="stylesheet">  
</head> 
<body>
  <nav class="navbar navbar-expand-md fixed-top bg-light e-coloresx">
    <a href="{{asset('/')}}"><img class="navbar-brand-minimized" src="{{asset('img/brand/sygnet.svg')}}" width="90" height="90" alt="Xixha Logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle e-text-color" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SIPAX</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item btn btn-success btn-responsive text-center text-success" href="{{url('root')}}">Inicio</a>
              <a class="dropdown-item btn btn-primary btn-responsive text-center text-primary" href="{{url('root/padron')}}">Padrón</a>
              <a class="dropdown-item btn btn-warning btn-responsive text-center text-warning" href="{{url('root/create')}}">Registro Apicultor</a>
              <a class="dropdown-item btn btn-info btn-responsive text-center text-info" href="{{url('secs/index')}}">Roles</a>
              <a class="dropdown-item btn btn-primary btn-responsive text-center text-primary" href="{{url('secs/create')}}">Crear Roles</a>
              <a class="dropdown-item btn btn-danger btn-responsive text-center text-danger"  href="{{url('logout')}}">Salir</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>
  <div class="container-fluid"> 
    @yield('contenido')
  </div>
  <script src="{{asset('js/jquery-3.3.1.slim-cnd.min.js')}}"></script>
  <script src="{{asset('js/popper-cnd.min.js')}}"></script>
  <script src="{{asset('js/bootstrap-cnd.min.js')}}"></script>
  <script src="{{asset('js/js.js')}}"></script>
  @stack('scripts')
</body>
</html>