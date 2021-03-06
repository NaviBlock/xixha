<!DOCTYPE html>
<html lang="es"> 
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Sipax, Xixhá">
  <meta name="author" content="Alejandro Hernández Valle">
  <meta name="generator" content="Sipax, Xixhá">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SIPAX</title>

  <link href="{{asset('css/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/e-estilo.css')}}" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"></script>
  
</head>
<body> 
  <div class="container">
    <div class="container-fluid">
      
    <!--#Menu-->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a href="{{asset('/')}}">
          <img class="navbar-brand-minimized" src="{{asset('img/brand/sygnet.svg')}}" width="90" height="90" alt="Xixha Logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="dropdown-item e-coloresx text-center te4 tam" href="{{url('root')}}">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="dropdown-item e-coloresx text-center te6 tam" href="{{url('root/padron')}}">Padrón</a>
            </li>
            <li class="nav-item">
              <a class="dropdown-item e-coloresx text-center te5 tam" href="{{url('root/create')}}">Registro Apicultor</a>
            </li>
            <li class="nav-item">
              <a class="dropdown-item e-coloresx text-center te1 tam" href="{{url('secs/index')}}">Roles</a>
            </li>
            <li class="nav-item">
              <a class="dropdown-item e-coloresx text-center te2 tam" href="{{url('secs/create')}}">Crear Roles</a>            
            </li>
          </ul>
          <span class="navbar-item">
            <a class="dropdown-item e-coloresx text-center te3 tam" href="{{url('logout')}}">Salir</a>
          </span>
        </div>
      </nav>

    <!--#Contenido-->
    @yield('contenido')
  </div>
</div>

<!--script src="{ {asset('js/jquery-3.3.1.slim-cnd.min.js')}}"></script>
<script src="{ {asset('js/popper-cnd.min.js')}}"></script>
<script src="{ {asset('js/bootstrap-cnd.min.js')}}"></script>
<script src="{ {asset('js/js.js')}}"></script--->

@stack('scripts')
</body>
</html>