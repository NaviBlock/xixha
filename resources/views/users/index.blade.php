<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Sipax, Xixhá">
    <meta name="author" content="Alejandro Hernández Valle">
    <meta name="generator" content="Sipax, Xixhá">
    <title>SIPAX</title> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    
    <link href="{{asset('css/cssx/bootstrap.min.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
    <link href="{{asset('css/cssx/jumbotron.css')}}" rel="stylesheet">    
    
    <link rel="stylesheet" href="{{asset('css/e-estilo.css')}}">
    <link rel="stylesheet" href="{{asset('css/dark.css')}}">
    <!--script src="{ {url('js/dark.js')}}"></script-->
  
  </head>
<body>
  <div class="container">
    <div class="content" id="content"> 
      <div class="container-fluid body-e">                
        
        <!--Menu-->
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a href="{{url('/')}}"><img class="navbar-brand-minimized logox" src="{{asset('img/sipaxQ.png')}}" alt="Xixha Logo"></a>
              <button class="navbar-toggler bar-color" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarText">
                <a class="nav-link e-coloresx px-2 text-uppercase">{{auth()->user()->name }}</a>
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">              
                    <a class="dropdown-item e-coloresx text-center te4" href="{{url('users/padron')}}">Padrón</a>
                  </li>
                </ul>
                <span class="navbar-item out-p">
                  <a class="dropdown-item e-coloresx te3" href="{{url('logout')}}">Salir</a>
                </span>
              </div>
            </nav>
            <!--div class="center">          
              <button onclick="swapDayAndNight()"><i class="fas fa-adjust"></i></button>
            </div-->
      
          <!--Main--->
            <div class="container-fliud">
              <main role="main">                
                <div class="jumbotron">
                  <!--Titulo principal-->
                  <h1 class="text-center display-4 e-coloresx e-element-11">Hola Amigo {{auth()->user()->name}} !</h1>
                  <p class="text-center e-estilo-p">El sistema de padrón de apicultores Xixhá, tiene la finalidad de llevar la rastreabilidad de la miel de cada apicultor de cada municipio de la costa chica y montaña del estado del guerrero.</p>
                  <span class="text-center">
                    <p class="text-center">
                      <a class="btn btn-primary btn-lg btnx btn-al" href="{{url('users/padron')}}" role="button">Ir a Padrón &raquo;</a>
                    </p>
                  </span>
                <div> 
              </main>
            </div>
            
          <!--Card-->
            <div class="container-fliud">  
              <div class="row">      
              <!--Card1-->
                <div class="col-md-4 ">
                  <div class="card text-center">
                    <div class="card-body e-element-2 ">
                      <h5 class="card-title text-primary">Mieles Xixhá</h5>
                      <p class="card-text text-justify e-element-1">Las mieles Xixhá provienen de la región, Costa Chica de Guerrero, se caracterizan por ser mieles muy aromáticas, un poco obscuras, comparadas con las mielesdel altiplano, pero con aromas y sabores muy marcados, intensos o suaves, pero definidos que se han ganado la aceptaciónde los consumidores.</p>
                      <a class="btn btn-primary" href="http://xixha.com/wp-content/uploads/2019/06/Caracterizacion-de-la-Miel-Xixha.pdf" role="button">Detalles &raquo;</a>
                    </div>
                  </div>
                </div>
      
              <!--Card2-->
                <div class="col-md-4">
                  <div class="card text-center">          
                    <div class="card-body e-element-2">            
                      <h5 class="card-title text-primary">Proyecto Estratégico: “Bio Parque Xixhá”</h5>
                      <p class="card-text text-justify e-element-1">Es un proyecto estratégico porque plantea una solución común a una problemática común, de bajo costo, alto impacto social, que genera empleo, arraigo comunitario, patrimonio familiar, forma agentes de cambio social guardianes de la naturaleza, al preservar los recursos de la selva y el bosque..</p>
                      <a class="btn btn-primary" href="http://xixha.com/wp-content/uploads/2019/03/Bio-Parque-Xixha.pdf" role="button">Detalles &raquo;</a>
                    </div>
                  </div>
                </div>
      
              <!--Card3-->
                <div class="col-md-4">
                  <div class="card text-center">        
                    <div class="card-body e-element-2">
                      <h5 class="card-title text-primary">Ficha Técnica Mieles Xixhá</h5>
                      <p class="card-text text-justify e-element-1">Nuestras mieles tienen aplicación nutricional, pueden degustarse directamente, en mesa, en platillos en cocina, en panaderías, pastelerías, en confitería (caramelos, granola, etc.), en cosméticos (cremas, shampoo, etc.), en coadyuvantes para la salud, jarabes, elaboraciónde cervezas, etc.</p>
                      <a class="btn btn-primary" href="http://xixha.com/wp-content/uploads/2019/06/Ficha-TecnicaMiel-Xixha-100619.pdf" role="button">Detalles &raquo;</a>
                    </div>
                  </div>
                </div>
      
              <!--Card4-->
                <div class="col-md-4 ">
                  <div class="card text-center">
                    <div class="card-body e-element-2 ">
                      <h5 class="card-title text-primary">Convacatorias</h5>
                      <p class="card-text text-center e-element-1">Convocatoria para los apicultores.</p>
                      <a class="btn btn-primary" href="{{url('convocatoria')}}" role="button">Detalles &raquo;</a>
                    </div>
                  </div>
                </div>
    
              <!--Card5-->
                <div class="col-md-4 ">
                    <div class="card text-center">
                      <div class="card-body e-element-2 ">
                        <h5 class="card-title text-primary">Noticias</h5>
                        <p class="card-text text-center e-element-1">Conoce las ultimas noticias del momento</p>
                        <a class="btn btn-primary fix-cub" href="http://xixha.com/category/blog/" role="button">Detalles &raquo;</a>
                      </div>
                    </div>
                  </div>

              <!--Card6-->
                <div class="col-md-4 ">
                    <div class="card text-center">
                      <div class="card-body e-element-2 ">
                        <h5 class="card-title text-primary">Calendario</h5>
                        <p class="card-text text-center e-element-1">conoce nuestro calendario de actividades mensual.</p>
                        <a class="btn btn-primary" href="{{url('users/cal')}}" role="button">Detalles &raquo;</a>
                      </div>
                    </div>
                  </div>                          
            </div>
          </div>
      
            <!--Footer-->         
            <footer class="container-fliud">
              <a href="http://xixha.com">
                <p class="foorter-color-e">&copy;Xixhá 2019</p>
              </a>
            </footer>      
          </div>
        </div>
      </div>
      
        <!--Efecto Wave-->
        <div class="wave">
            <div style="height:50px; overflow: hidden;">
              <svg viewBox="0 0 400 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C277.93,134.70 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #FFA000;"></path>
              </svg>
            </div>
        </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!--script src="{ {asset('js/jsx/jquery-slim.min.js')}}"></script-->
    <script src="{{asset('js/jsx/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/dark.js')}}"></script>  

  </body>
</html>