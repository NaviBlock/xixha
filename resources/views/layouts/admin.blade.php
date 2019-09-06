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

<!--Modal-->  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <!----------------------------------------------------------------->

  <link href="{{asset('css/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
  <!--link href="{ {asset('css/cssx/jumbotron.css')}}" rel="stylesheet"-->
  <link href="{{asset('css/e-estilo.css')}}" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"></script>
</head>
<body>
  <div class="container">
    <div class="container-fluid">
      <!--#Menu-->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a href="{{url('/')}}"><img class="navbar-brand-minimized" src="{{asset('img/brand/sygnet.svg')}}" width="90" height="90" alt="Xixha Logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="dropdown-item e-coloresx text-center te4" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SIPAX</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">          
                  <a class="dropdown-item btn btn-success text-center te1" href="{{url('root')}}">Inicio</a>
                  <a class="dropdown-item btn btn-primary text-center te2" href="{{url('root/padron')}}">Padrón</a>
                  <a class="dropdown-item btn btn-warning text-center te4" href="{{url('root/create')}}">Registro Apicultor</a>
                  <a class="dropdown-item btn btn-info text-center te5" href="{{url('secs/index')}}">Roles</a>
                  <a class="dropdown-item btn btn-primary text-center te6" href="{{url('secs/create')}}">Crear Roles</a>
                  <a class="dropdown-item btn btn-danger text-center te3"  href="{{url('logout')}}">Salir</a>
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