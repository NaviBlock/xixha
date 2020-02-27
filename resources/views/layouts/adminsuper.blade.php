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
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a href="{{url('/')}}"><img class="navbar-brand-minimized" src="{{asset('img/brand/sygnet.svg')}}" width="90"
            height="90" alt="Xixha Logo"></a>
        <button id="menux" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle e-text-color" href="" id="navbarDropdownMenuLink"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SIPAX</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item btn btn-primary btn-responsive text-center e-text-color-y"
                  href="{{url('supervisors/index')}}">Inicio</a>
                <a class="dropdown-item btn btn-primary btn-responsive text-center e-text-color-y"
                  href="{{url('supervisors/padron')}}">Padrón</a>
                <a class="dropdown-item btn btn-primary btn-responsive text-center e-text-color-r"
                  href="{{url('/logout')}}">Salir</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
      <!------------------------------------------------->
      <!--#Contenido-->
      @yield('contenido')
      <!-------------->
    </div>
  </div>
  <!------------------------------------------------------>
  <!--#Bootstrap-->
  <script src="{{asset('js/jquery-3.3.1.slim-cnd.min.js')}}"></script>
  <script src="{{asset('js/popper-cnd.min.js')}}"></script>
  <script src="{{asset('js/bootstrap-cnd.min.js')}}"></script>
  <script src="{{asset('js/js.js')}}"></script>
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