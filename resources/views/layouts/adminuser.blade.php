<!DOCTYPE html>
<html lang="es"> 
<head>
  <meta charset="utf-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Sipax, Xixhá">
  <meta name="author" content="Alejandro Hernández Valle">
  <meta name="generator" content="Sipax, Xixhá">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SIPAX</title>   
  <link href="{{asset('css/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
  <!--link rel="stylesheet" href="{ {asset('css/iman.css')}}"-->
  <link rel="stylesheet" href="{{asset('css/e-estilo.css')}}">
  <!--link rel="stylesheet" href="{ {asset('css/estilo.css')}}"-->
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
</head>
<body>
  <div class="container">
    <div class="container-fluid">

      <!--Menu--->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a href="{{asset('/')}}"><img class="navbar-brand-minimized" src="{{asset('img/sipaxQ.png')}}" width="90" height="75" alt="Xixha Logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="dropdown-item e-coloresx text-center te4" href="{{url('home')}}">Inicio</a>
            </li>
          </ul>
          <span class="navbar-item">
            <a class="dropdown-item e-coloresx text-center te3"  href="{{url('logout')}}">Salir</a>
          </span>  
        </div>
      </nav> 
      <!--Contenido-->
      @yield('contenido')      
    </div>
  </div>

  <script src="{{asset('js/jquery-3.3.1.slim-cnd.min.js')}}"></script>
  <script src="{{asset('js/popper-cnd.min.js')}}"></script>
  <script src="{{asset('js/bootstrap-cnd.min.js')}}"></script>
  <script src="{{asset('js/js.js')}}"></script>
  @stack('scripts')
</body>
</html>