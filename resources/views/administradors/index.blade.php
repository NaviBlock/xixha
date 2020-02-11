<!doctype html>
<html lang="es">
  <head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Sipax, Xixhá">
    <meta name="author" content="Alejandro Hernández Valle">
    <meta name="generator" content="Sipax, Xixhá">
    <title>SIPAX</title> 
    <link href="{{asset('css/cssx/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/e-estilo.css')}}">
   
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
  <a class="navbar-brand" href="">SIPAX</a>
  <button id="menux" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Actividades</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Configuración</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
        <a class="dropdown-item btn btn-primary btn-responsive text-center e-text-color-y" href="{{url('administradors')}}">Inicio</a>
          <a class="dropdown-item btn btn-primary btn-responsive text-center e-text-color-y" href="{{url('administradors/padron')}}">Padrón de Apicultores</a>
          <a class="dropdown-item btn btn-success btn-responsive text-center e-text-color-b" href="{{url('administradors/create')}}">Registro de Apicultor</a>                                
          <a class="dropdown-item btn btn-primary btn-responsive text-center e-text-color-r"  href="{{url('logout')}}">Salir</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<main role="main">
  <div class="jumbotron">
    <div class="container">
      <h1 class="display-3 e-coloresx">Hola, Amigo Administrador {{ auth()->user()->name }}!</h1>
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum dolore quos, accusamus quidem quas maiores assumenda ipsa, aliquam id deserunt voluptas voluptates ratione laudantium maxime excepturi porro eum eos hic!
      Minus voluptate quasi, recusandae perferendis ad veritatis iusto id sit repudiandae, quo animi magni ipsa, totam laboriosam deserunt nemo neque quos facere quaerat a rerum. Dolorum, distinctio harum. Necessitatibus, molestias.
      Nemo recusandae dolores dolorum eum exercitationem similique, id quos hic, sapiente voluptatum sed! Omnis ipsa commodi fugiat. Saepe voluptas, tempora suscipit similique quia accusamus. At vero iusto possimus aliquid corporis?</p>
      <p><a class="btn btn-primary btn-lg" href="#" role="button">Aprende más &raquo;</a></p>
    </div>
  </div>
  <div class="container">  
    <div class="row">
      <div class="col-md-4">
        <h2 class="e-coloresx">Evento 1</h2>
        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
        <p><a class="btn btn-primary" href="#" role="button">Detalles &raquo;</a></p>
      </div>
      <div class="col-md-4">
        <h2 class="e-coloresx">Evento 2</h2>
        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
        <p><a class="btn btn-primary" href="#" role="button">Detalles &raquo;</a></p>
      </div>
      <div class="col-md-4">
        <h2 class="e-coloresx">Evento 3</h2>
        <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <p><a class="btn btn-primary" href="#" role="button">Detalles &raquo;</a></p>
      </div>
    </div>
    <hr>
  </div>
</main>

<footer class="container">
  <p class="e-coloresx">&copy;Xixhá 2019</p>
</footer>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="{{asset('js/jsx/jquery-slim.min.js')}}"></script>
  <script src="{{asset('js/jsx//bootstrap.bundle.min.js')}}"></script>
        <!-- #annyang-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/annyang/2.6.0/annyang.min.js"></script>
        <script>
          if (annyang) {
            var comands = {
              'hola': function () {            
               $("#menux").click();            
              },
    
              'noche': function () {
                $("#switch").click();
              },
              
            };
    
            annyang.addCommands(comands);
            annyang.setLanguage('es-MX');
            annyang.start();
          }
        </script>
</body>
</html>