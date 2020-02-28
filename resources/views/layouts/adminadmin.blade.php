<?php/*
|--------------------------------------------------------------------------
| Vista Admin para el administrador
|--------------------------------------------------------------------------
| En esta vista se invoca el HEAD del documento HTML 
*/?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SIPAX</title>
  <?php //#Bootstrap?>
  <link href="{{asset('css/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
  <?php //#Utilizamos la propiedad asset para llamar los recursos nuestros estilos CSS?>
  <link rel="stylesheet" href="{{asset('css/iman.css')}}">
  <link rel="stylesheet" href="{{asset('css/e-estilo.css')}}">
  <?php //#Jquery?>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
</head>

<body>
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
                href="{{url('administradors')}}">Inicio</a></li>
            <li class="nav-item"><a class="dropdown-item e-coloresx text-center te6"
                href="{{url('administradors/padron')}}">Padrón</a></li>
            <li class="nav-item"><a class="dropdown-item e-coloresx text-center te5"
                href="{{url('administradors/create')}}">Registro Apicultor</a></li>
            <li class="nav-item"><a class="dropdown-item e-coloresx text-center te1"
                href="{{url('secs/index')}}">Roles</a></li>
            <li class="nav-item"><a class="dropdown-item e-coloresx text-center te2" href="{{url('secs/create')}}">Crear
                Roles</a></li>
            <li class="nav-item">
              <a class="dropdown-item e-coloresx text-center te2" href="{{url('banx')}}">Pagos</a>
            </li>
            <li class="nav-item"><a class="dropdown-item e-coloresx text-center te4" href="#">Historial</a></li>
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

      <?php //#llamamos en cada contenido a nuestra vista admin?>
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