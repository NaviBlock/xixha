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
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
  <!--#Estilo--->
  <link rel="stylesheet" href="{{asset('css/e-estilo.css')}}">
  <link rel="stylesheet" href="{{asset('css/ex.css')}}">
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
          <li class="nav-item active"><a class="dropdown-item e-coloresx text-center te4" href="{{url('users/padron')}}">Padrón</a></li>
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

    <!--#Main--->
    <div class="jumbotron col-9 col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto autom">
      <!--Titulo principal-->
      <h1 class="text-center display-4 e-coloresx e-element-11">Hola, Amigo Apicultor !</h1>
      <a class="nav-link e-coloresx px-2 e-element-11" href="">Apicultor: {{auth()->user()->name}} </a>
      <p class="text-center e-estilo-p">El sistema de padrón de apicultores Xixhá, tiene la finalidad de llevar la rastreabilidad de la miel de cada apicultor de cada municipio de la costa chica y montaña del estado del guerrero.</p>
      <p class="text-center"><a class="btn btn-primary btn-lg" href="{{url('users/padron')}}" role="button">Ir a Padrón &raquo;</a></p>          
    </div>

    <!--Card-->
    <div class="col-9 col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto ">
      <div class="row lapix-e">

        <!--Card1-->        
          <div class="card text-center lapix">
            <div class="card-body e-element-2 lapix1">
              <h5 class="card-title text-primary lapix1">Mieles Xixhá</h5>
              <p class="card-text text-justify e-element-1 lapix1">Las mieles Xixhá provienen de la región, Costa Chica de Guerrero, se caracterizan por ser mieles muy aromáticas, un poco obscuras, comparadas con las mielesdel altiplano, pero con aromas y sabores muy marcados, intensos o suaves, pero definidos que se han ganado la aceptaciónde los consumidores.</p>
              <a class="btn btn-primary" href="http://xixha.com/wp-content/uploads/2019/06/Caracterizacion-de-la-Miel-Xixha.pdf" role="button">Detalles &raquo;</a>
            </div>
          </div>
        </div>

        <!--Card2-->        
          <div class="card text-center lapix">
            <div class="card-body e-element-2 lapix1">
              <h5 class="card-title text-primary lapix1">Proyecto Estratégico: “Bio Parque Xixhá”</h5>
              <p class="card-text text-justify e-element-1 lapix1">Es un proyecto estratégico porque plantea una solución común
                a una problemática común, de bajo costo, alto impacto social, que genera empleo, arraigo comunitario,
                patrimonio familiar, forma agentes de cambio social guardianes de la naturaleza, al preservar los
                recursos de la selva y el bosque; tierra, agua, flora, fauna, oxigeno, combate al cambio climático..</p>
              <a class="btn btn-primary" href="http://xixha.com/wp-content/uploads/2019/03/Bio-Parque-Xixha.pdf"
                role="button">Detalles &raquo;</a>
            </div>
          </div>
        </div>

        <!--Card3-->        
          <div class="card text-center lapix">
            <div class="card-body e-element-2 lapix1">
              <h5 class="card-title text-primary lapix1">Ficha Técnica Mieles Xixhá</h5>
              <p class="card-text text-justify e-element-1 lapix1">Nuestras mieles tienen aplicación nutricional, pueden degustarse directamente, en mesa, en platillos en cocina, en panaderías, pastelerías, en confitería(caramelos, granola, etc.), en cosméticos (cremas, shampoo, etc.), en coadyuvantes para la salud, jarabes, elaboraciónde cervezas, etc.</p>
              <a class="btn btn-primary" href="http://xixha.com/wp-content/uploads/2019/06/Ficha-TecnicaMiel-Xixha-100619.pdf" role="button">Detalles &raquo;</a>
            </div>
          </div>        

    <!--Footer-->
    <div class="container-fliud">
      <a href="http://xixha.com"><p class="foorter-color-e">&copy;Xixhá 2019</p></a>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>  
  <script src="{{asset('js/jsx/jquery-slim.min.js')}}"></script>
  <script src="{{asset('js/jsx//bootstrap.bundle.min.js')}}"></script>
  <script src="{{URL('js/mainx.js')}}"></script>
</body>

</html>