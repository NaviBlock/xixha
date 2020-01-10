<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Sipax, Xixhá">
  <meta name="author" content="Alejandro Hernández Valle">
  <meta name="generator" content="Sipax, Xixhá">
  <title>SIPAX</title> 

  <!--#Bootstrp -->
  <link href="{{asset('css/cssx/bootstrap.min.css')}}" rel="stylesheet">    
  <!--#Google Font-->
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
  <!--#Estilo--->
  <link rel="stylesheet" href="{{asset('css/e-estilo.css')}}">
    
</head>
<body>
  <div class="container-fluid"> 

  <!--#Menú-->
  <nav class="navbar navbar-expand-lg navbar-light">
      <a href="{{url('/')}}"><img class="navbar-brand-minimized" src="{{asset('img/sipaxQ.png')}}" width="90" height=75 alt="Xixha Logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarText">
        <a class="nav-link e-coloresx px-2">{{auth()->user()->name}} </a>
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active"><a class="dropdown-item e-coloresx text-center te4" href="{{url('root/padron')}}">Padrón</a></li>
          <li class="nav-item"><a class="dropdown-item e-coloresx text-center te1" href="{{url('root/create')}}">Registro Apicultor</a></li>
          <li class="nav-item"><a class="dropdown-item e-coloresx text-center te2" href="{{url('secs/index')}}">Roles</a></li>
          <li class="nav-item"><a class="dropdown-item e-coloresx text-center te5" href="{{url('secs/create')}}">Crear Roles</a></li>
          <li class="nav-item"><a class="dropdown-item e-coloresx text-center te4" href="{{url('story')}}">Historial</a></li>
        </ul>
        <span class="navbar-item"><a class="dropdown-item e-coloresx text-center te3" href="{{url('logout')}}">Salir</a></span>  
      </div>
  </nav>

  <div class="container-fluid"> 
    <div class="row">
    <!--#Main-->
      <div class="jumbotron col-8">

          <!--Titulo principal-->
          <h1 class="text-center display-4 e-coloresx e-element-11">Hola Amigo!</h1> 
          <a class="nav-link e-coloresx px-2 e-element-11">Administrador {{auth()->user()->name}}!</a>
          <p class="text-center e-estilo-p">El sistema de padrón de apicultores Xixhá, tiene la finalidad de llevar la rastreabilidad de la miel de cada apicultor de cada municipio de la costa chica y montaña del estado del guerrero.</p>
          <p class="text-center"><a class="btn btn-primary btn-lg" href="{{url('root/padron')}}" role="button">Ir a Padrón &raquo;</a></p>
        
      </div>
      
      <!--#Card1-->
      <div class="col-4">
        <div class="row">

          <div class="col-auto">
            <div class="card text-center">
              <div class="card-body e-element-2">
                <h5 class="card-title text-primary">Mieles Xixhá</h5>
                <p class="card-text text-justify e-element-1">Las mieles Xixhá provienen de la región, Costa Chica de Guerrero, se caracterizan por ser mieles muy aromáticas, un poco obscuras, comparadas con las mielesdel altiplano, pero con aromas y sabores muy marcados, intensos o suaves, pero definidos que se han ganado la aceptaciónde los consumidores.</p>
                <a class="btn btn-primary" href="http://xixha.com/wp-content/uploads/2019/06/Caracterizacion-de-la-Miel-Xixha.pdf" role="button">Detalles &raquo;</a>
              </div>
            </div>
          </div>

          <div class="col-auto">
            <div class="card text-center">
              <div class="card-body e-element-2">
                <h5 class="card-title text-primary">Mieles Xixhá</h5>
                <p class="card-text text-justify e-element-1">Las mieles Xixhá provienen de la región, Costa Chica de Guerrero, se caracterizan por ser mieles muy aromáticas, un poco obscuras, comparadas con las mielesdel altiplano, pero con aromas y sabores muy marcados, intensos o suaves, pero definidos que se han ganado la aceptaciónde los consumidores.</p>
                <a class="btn btn-primary" href="http://xixha.com/wp-content/uploads/2019/06/Caracterizacion-de-la-Miel-Xixha.pdf" role="button">Detalles &raquo;</a>
              </div>
            </div>
          </div>          

        </div>
      </div>

    </div>
  </div>

      <!--#Footer-->             
      <div class="container-fliud">
        <a href="http://xixha.com"><p class="foorter-color-e">&copy;Xixhá 2019</p></a>
      </div>
    </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="{{asset('js/jsx/jquery-slim.min.js')}}"></script>
  <script src="{{asset('js/jsx//bootstrap.bundle.min.js')}}"></script>

</body>
</html>