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
    <nav class="navbar navbar-expand-md fixed-top bg-light e-coloresx e-navbar">
      <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse e-padding">
        <button class="navbar-toggler navbar-toggler-right " type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="text-wrap">
          <a class="navbar-link font-weight-bold" href="/">SIPAX</a>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
          <ul class="navbar-nav flex-row w-100 e-ul">
            <li class="nav-item px-2 mr-auto active">                  
              <a class="nav-link"  href="{{url('users/padron')}}">Padrón</a>
            </li>
            <li class="nav-item px-2 active">                  
              <a class="nav-link e-coloresx px-2">Apicultor {{ auth()->user()->name }}</a>
            </li>
            <li class="nav-item px-2">                  
              <a class="nav-link"  href="{{url('logout')}}">Salir</a>
            </li>
          </ul>
        </div>
      </nav>
    </nav>
<main role="main">
  <div class="jumbotron">

    <div class="container e-fondo-p">     
      <!--Titulo principal-->
      <h1 class="text-center display-4 e-estilo-p">Hola, Amigo Apicultor!</h1>      

      <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!--set img-->
        <div class="carousel-inner">
          <div class="carousel-item active">          
            <img src="img/slide/colmenas-2.jpg" class="img-fluid " alt="slide">            
              <div class="carousel-caption ">
                <h3 class="text-white">test</h3>
                <p>test2</p>
              </div>
          </div>

          <div class="carousel-item">
              <img src="img/slide/apiarios-4.jpg" class="img-fluid " alt="slide">
              <div class="carousel-caption">
                <h5>test</h5>
                <p>test2</p>
              </div>
          </div>
          <div class="carousel-item">
              <img src="img/slide/apiarios-6.jpg" class="img-fluid " alt="slide">
              <div class="carousel-caption">
                <h5>test</h5>
                <p>test2</p>
              </div>
          </div>
          <div class="carousel-item">
              <img src="img/slide/apiarios-7.jpg" class="img-fluid " alt="slide">
              <div class="carousel-caption">
                <h5>test</h5>
                <p>test2</p>
              </div>
          </div>

        </div>
      </div>

      <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>

        


      <p class="text-justify e-estilo-p">El sistema de padrón de apicultores Xixhá, tiene la finalidad de llevar el control y rastreabilidad de la miel de cada apicultor de la costa chica y montaña del estado del guerrero.</p><br>      
    </div>
    <p><a class="btn btn-primary btn-lg" href="http://xixha.com/category/blog/noticias/" role="button">Noticias&raquo;</a></p>
  </div>
  <div class="container">  
    <div class="row">
    
      <div class="col-md-4">
        <!--Subtitulo 1-->
        <h2 class="e-coloresx text-justify">Característica de las mieles xixhá, de la costa chica de guerrero</h2>
        <p class="text-justify">Las  mieles  Xixhá  provienen  de  la  región,Costa  Chica  de  Guerrero,  se caracterizan   por   ser mieles   muy   aromáticas,   un   poco   obscuras, comparadas con las mielesdel altiplano, pero con aromas y sabores muy marcados,  intensos  o  suaves,  pero  definidos  que  se  han  ganado  la aceptación de los consumidores.</p>
        <p><a class="btn btn-primary" href="http://xixha.com/wp-content/uploads/2019/06/Caracterizacion-de-la-Miel-Xixha.pdf" role="button">Detalles &raquo;</a></p>
      </div>

      <div class="col-md-4">
        <!--Subtitulo 2-->
        <h2 class="e-coloresx text-justify">Proyecto Estratégico: “Bio Parque Xixhá”</h2>
        <p>Es un proyecto estratégico porque plantea una solución común a una problemática común, de bajo costo, alto impacto social, que genera empleo, arraigo comunitario, patrimonio familiar, forma agentes de cambio social guardianes de la naturaleza, al preservar los recursos de la selva y el bosque; tierra, agua, flora, fauna, oxigeno, combate al cambio climático.</p>
        <p><a class="btn btn-primary text-justify" href="http://xixha.com/bio-parque-xixha/" role="button">Detalles &raquo;</a></p>
      </div>

      <!--Subtitulo 3-->
      <div class="col-md-4">
        <h2 class="e-coloresx text-justify">Ficha técnica miel Xixhá</h2>
        <p class="text-justify">Nuestras mieles tienen aplicación nutricional, pueden degustarse directamente, en mesa, en platillos en cocina, en panaderías, pastelerías, en confitería(caramelos, granola,etc.), en cosméticos(cremas, shampoo, etc.), en coadyuvantes para la salud, jarabes, elaboraciónde cervezas, etc.</p>
        <p><a class="btn btn-primary" href="http://xixha.com/wp-content/uploads/2019/06/Ficha-TecnicaMiel-Xixha-100619.pdf" role="button">Detalles &raquo;</a></p>      
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
</body>
</html>