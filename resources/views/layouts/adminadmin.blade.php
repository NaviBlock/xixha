<?php/*
|--------------------------------------------------------------------------
| Plantilla Admin para el administrador
|--------------------------------------------------------------------------
| Muestra el contenedor en donde se visualizara la informacion de las vista 
*/?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SIPAX</title>
  <link href="{{asset('css/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/iman.css')}}">
  <link rel="stylesheet" href="{{asset('css/e-estilo.css')}}">
  <!--link rel="stylesheet" href="{ {asset('css/estilo.css')}}"-->
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
</head>

<body>
  <!-- #Contenedor-->
  <div class="container">
    <div class="container-fluid">
      <!-- #Menu-->
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
      <!------------------------------------------------->
      <!--#Contenido-->
      @yield('contenido')
      <!-------------->
    </div>
  </div>
  <!------------------------------------------------------>
  <!--#Utilizamos la propiedad URL para hacer referencia al directorio-->
  <!--#Script de la configuración dark en el directorio/ js--->
  <script src="{{URL('js/mainx.js')}}"></script>
  <!--#script annyang--->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/annyang/2.6.0/annyang.min.js"></script>
  <script>
    //condicionamos si la libreria esta disponible 
    if (annyang) {
      //definimos la variable comands, que guardaran los valores en objeto
      var comands = {
        //definimmos nuestro objeto hola
        //que desplegara el menu
        'hola': function () {
          $("#menux").click();
        },
        //definimos nuestro objeto noche que llamara 
        //a la funcion #switch
        'noche': function () {
          $("#switch").click();
        },
      };
      annyang.addCommands(comands);
      //definimmos el set de lenguage
      annyang.setLanguage('es-MX');
      //inializamos la funcion
      annyang.start();
    }
  </script>
</body>

</html>