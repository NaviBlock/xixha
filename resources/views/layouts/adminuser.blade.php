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
  <!--# Modal-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <!-- #libreria fuente Google Font-->
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
  <!-- #libreria de elemento fontawesome-->
  <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
  <!--# Estilos-->
  <!--#Utilizamos la propiedad asset para hacer referencia al directorio del archivo css-->
  <link href="{{asset('css/e-estilo.css')}}" rel="stylesheet">
  <link href="{{asset('css/ex.css')}}" rel="stylesheet">
  <!-------------------------------------------->
</head>

<body>
  <!-- #Mode de la vista-->
  <div class="container">
    <div class="container-fluid">

      <!--# Menu-->
      <nav class="navbar navbar-expand-auto navbar-light">
        <!-- #Similar a la propiedad asset, solo que hacer referencia el direccionamiento -->
        <a href="{{url('/')}}"><img class="navbar-brand-minimized" src="{{asset('img/sipaxQ.png')}}" width="90"
            height="75" alt="Xixha Logo"></a>
        <button id="menux" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
          aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation"><span
            class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto">
            <!-- #Propiedad url-->
            <li class="nav-item active"><a class="dropdown-item e-coloresx text-center te4"
                href="{{url('home')}}">Inicio</a></li>
            <!-- #Propiedad url-->
            <li class="nav-item active"><a class="dropdown-item e-coloresx text-center te4"
                href="{{url('users/perfil')}}">Perfil</a></li>
            <div class="contenedor">
              <div class="enlaces enlacest">
                <button class="switch text-center btn-boton" id="switch">
                  <span><i class="fas fa-sun "></i></span>
                  <span><i class="fas fa-moon "></i></span>
                </button>
              </div>
            </div>
          </ul>
          <span class="navbar-item">
            <!-- #Propiedad url-->
            <a class="dropdown-item e-coloresx text-center te3" href="{{url('logout')}}">Salir</a>
          </span>
        </div>
      </nav>

      <!-- #Contenido-->
      <!-- #Invocamos el contenido a nuestras vistas-->
      @yield('contenido')
      <!-------------------------------------------->
    </div>
  </div>

  @stack('scripts')
  <!--#Utilizamos la propiedad URL para hacer referencia al directorio-->
  <script src="{{URL('js/mainx.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/annyang/2.6.0/annyang.min.js"></script>

  <script>
    //condicionamos si la libreria esta disponible annyang 
    if (annyang) {
      //definimos la variable comands, que guardaran los valores en un objeto
      var comands = {
        //definimmos nuestro objeto hola
        //que desplegara el menu
        'hola': function () {
          $("#menux").click();
        },
        //definimos nuestro obejto noche que llamara 
        //a la funcion #switch
        'noche': function () {
          $("#switch").click();
        },
      };
      //llamamos la funcion addCommands 
      //que definimos nuestro comando en un objeto
      annyang.addCommands(comands);
      //definimmos el set de lenguage
      annyang.setLanguage('es-MX');
      //inializamos la funcion
      annyang.start();
    }
  </script>
</body>

</html>