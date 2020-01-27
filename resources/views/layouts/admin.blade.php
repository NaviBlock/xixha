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
  <!--# Estilos-->
  <link href="{{asset('css/e-estilo.css')}}" rel="stylesheet">
  <!--# Modal-->  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet"> 
  <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
  <link href="{{asset('css/ex.css')}}" rel="stylesheet">
</head>
<body> 

  <!--- #Modelo de vista-->
    <div class="container">
      <div class="container-fluid">      
      <!--# Menu-->
        <nav class="navbar navbar-expand-auto navbar-light">
          <a href="{{asset('/')}}"><img class="navbar-brand-minimized" src="{{asset('img/brand/sygnet.svg')}}" width="90" height="90" alt="Xixha Logo"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active"><a class="dropdown-item e-coloresx text-center te4" href="{{url('root')}}">Inicio</a></li>
              <li class="nav-item"><a class="dropdown-item e-coloresx text-center te6" href="{{url('root/padron')}}">Padrón</a></li>
              <li class="nav-item"><a class="dropdown-item e-coloresx text-center te5" href="{{url('root/create')}}">Registro Apicultor</a></li>
              <li class="nav-item"><a class="dropdown-item e-coloresx text-center te1" href="{{url('secs/index')}}">Roles</a></li>
              <li class="nav-item"><a class="dropdown-item e-coloresx text-center te2" href="{{url('secs/create')}}">Crear Roles</a></li>
              <li class="nav-item"><a class="dropdown-item e-coloresx text-center te4" href="{{url('story/index')}}">Historial</a></li>              
              <div class="contenedor">
                <div class="enlaces enlacest">
                  <button class="switch text-center btn-boton" id="switch">
                    <span><i class="fas fa-sun "></i></span>
                    <span><i class="fas fa-moon "></i></span>
                  </button>
                </div>
              </div>
            </ul>
            <span class="navbar-item"><a class="dropdown-item e-coloresx text-center te3" href="{{url('logout')}}">Salir</a></span>

            </div>
          </nav>
 
      <!--# Contenido-->      
        @yield('contenido')
      </div>
    </div>

   
  @stack('scripts')
  <script src="{{URL('js/mainx.js')}}"></script>
</body>
</html>