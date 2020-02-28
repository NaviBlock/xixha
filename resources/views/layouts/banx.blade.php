<?php/*
|--------------------------------------------------------------------------
| Vista Banx
|--------------------------------------------------------------------------
| En esta vista se invoca el HEAD del documento HTML 
*/?>
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
  <?php //#bootstrap?>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <!-- #libreria fuente Google Font-->
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
  <!-- #libreria de elemento fontawesome-->
  <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
  <?php //#Utilizamos la propiedad asset para llamar los recursos nuestros estilos CSS?>
  <link href="{{asset('css/e-estilo.css')}}" rel="stylesheet">
  <link href="{{asset('css/ex.css')}}" rel="stylesheet">
</head>

<body>
  <!-- #Contenedor-->
  <div class="container">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-auto navbar-light">
        <a href="{{url('/')}}"><img class="navbar-brand-minimized" src="{{asset('img/sipaxQ.png')}}" width="90"
            height="75" alt="Xixha Logo"></a>
        <button id="menux" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
          aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation"><span
            class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active"><a class="dropdown-item e-coloresx text-center te4"
                href="{{url('banx/index')}}">Dashboard</a></li>
            <li class="nav-item"><a class="dropdown-item e-coloresx text-center te2" href="{{url('banx/create')}}">Crear
                pago</a></li>
            <li class="nav-item"><a class="dropdown-item e-coloresx text-center te2"
                href="{{url('banx/create')}}">Editar pago</a></li>
            <li class="nav-item"><a class="dropdown-item e-coloresx text-center te2"
                href="{{url('banx/search')}}">Buscar pago</a></li>
            <li class="nav-item"><a class="dropdown-item e-coloresx text-center te2"
                href="{{url('banx/search')}}">Mostrar pago</a></li>
            <li class="nav-item"><a class="dropdown-item e-coloresx text-center te4"
                href="{ {url('story/index')}}">Historial</a></li>
            <div class="contenedor">
              <div class="enlaces enlacest">
                <button class="switch text-center btn-boton" id="switch">
                  <span><i class="fas fa-sun "></i></span>
                  <span><i class="fas fa-moon "></i></span>
                </button>
              </div>
            </div>
          </ul>
          <span class="navbar-item"><a class="dropdown-item e-coloresx text-center te3"
              href="{{url('logout')}}">Salir</a></span>
        </div>
      </nav>
      <?php //#llamamos en cada contenido a nuestra vista banx?>
      @yield('contenido')
      <!-------------->
    </div>
  </div>
  <?php //#Archivo de configuración del modo dark?>
  <script src="{{URL('js/mainx.js')}}"></script>
  <?php //#Libreria annyang para realizar funciones programable con voz?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/annyang/2.6.0/annyang.min.js"></script>
  <?php //#Definimos nuestro objeto comands, para invocar nuestra funciones personalizada, solo si el navegador es compatible?>
  <script>
    if (annyang) {
      var comands = {
        'hola': function () {
          $("#menux").click();
        },
        'noche': function () {
          $("#switch").click();
        }
      };
      annyang.addCommands(comands);
      annyang.setLanguage('es-MX');
      annyang.start();
    }
  </script>
</body>

</html>