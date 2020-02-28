<?php/*
|--------------------------------------------------------------------------
| vista users/index
|--------------------------------------------------------------------------
| La vista index se utiliza para definir la direccion principal del directorio
| en el controlador
*/?>
<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Sipax, Xixhá">
  <meta name="author" content="Alejandro Hernández Valle">
  <meta name="generator" content="Sipax, Xixhá">
  <title>SIPAX</title>
  <?php //#Utilizamos la propiedad asset para llamar los recursos de bootstrap.css?>
  <link href="{{asset('css/cssx/bootstrap.min.css')}}" rel="stylesheet">
  <!--#Google Font-->
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
  <!-- #Fontawesome-->
  <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
  <?php //#Utilizamos la propiedad asset para llamar los recursos nuestros estilos CSS?>
  <link rel="stylesheet" href="{{asset('css/e-estilo.css')}}">
  <link rel="stylesheet" href="{{asset('css/ex.css')}}">
</head>

<body>
  <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light">
      <?php //#Utilizamos la propiedad URL para ubicar el directorio de la vista y utilizamos la propiedad asset para ubicar los nuestro recursos?>
      <a href="{{url('/')}}"><img class="navbar-brand-minimized" src="{{asset('img/sipaxQ.png')}}" width="90" height=75
          alt="Xixha Logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
        aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation" id="menux"><span
          class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarText">
        <?php //#llamamos por medio de middleware el name del usuario?>
        <a class="nav-link e-coloresx px-2">{{auth()->user()->name}} </a>
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active"><a class="dropdown-item e-coloresx text-center te4" href="{{url('users/padron')}}"
              id="pdx">Padrón</a></li>
          <!--li class="nav-item active"><a class="dropdown-item e-coloresx text-center te4" href="{ {url('users/perfil')}}" id="pdx">Perfil</a></li-->
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
    <!--#Main--->
    <div class="jumbotron col-9 col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto autom rest3">
      <h1 class="text-center display-4 e-coloresx e-element-11">Hola, Amigo Apicultor !</h1>
      <a class="nav-link e-coloresx px-2 e-element-11" href="">{{auth()->user()->name}} </a>
      <p class="text-center e-estilo-p">El sistema de padrón de apicultores Xixhá, tiene la finalidad de llevar la
        rastreabilidad de la miel de cada apicultor de cada municipio de la costa chica y montaña del estado del
        guerrero.</p>
      <p class="text-center"><a class="btn btn-primary btn-lg" href="{{url('users/padron')}}" role="button">Ir a Padrón
          &raquo;</a></p>
    </div>
    <!-- #Cards-->
    <div class="col-9 col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto ">
      <div class="row lapix-e">
        <!-- #Card1-->
        <div class="card text-center lapix">
          <div class="card-body e-element-2 ">
            <h5 class="card-title text-primary lapix1">Mieles Xixhá</h5>
            <p class="card-text text-justify e-element-1 rest2 ">Las mieles Xixhá provienen de la región, Costa Chica de
              Guerrero, se caracterizan por ser mieles muy aromáticas, un poco obscuras, comparadas con las mielesdel
              altiplano, pero con aromas y sabores muy marcados, intensos o suaves, pero definidos que se han ganado la
              aceptaciónde los consumidores.</p>
            <a class="btn btn-primary"
              href="http://xixha.com/wp-content/uploads/2019/06/Caracterizacion-de-la-Miel-Xixha.pdf"
              role="button">Detalles &raquo;</a>
          </div>
        </div>
        <!-- #Card2-->
        <div class="card text-center lapix">
          <div class="card-body e-element-2 ">
            <h5 class="card-title text-primary lapix1">Proyecto Estratégico: “Bio Parque Xixhá”</h5>
            <p class="card-text text-justify e-element-1 rest2">Es un proyecto estratégico porque plantea una solución
              común a una problemática común, de bajo costo, alto impacto social, que genera empleo, arraigo
              comunitario, patrimonio familiar, forma agentes de cambio social guardianes de la naturaleza, al preservar
              los recursos de la selva y el bosque; tierra, agua, flora, fauna, oxigeno, combate al cambio climático..
            </p>
            <a class="btn btn-primary" href="http://xixha.com/wp-content/uploads/2019/03/Bio-Parque-Xixha.pdf"
              role="button">Detalles &raquo;</a>
          </div>
        </div>
        <!-- #Card3-->
        <div class="card text-center lapix">
          <div class="card-body e-element-2 ">
            <h5 class="card-title text-primary lapix1">Ficha Técnica Mieles Xixhá</h5>
            <p class="card-text text-justify e-element-1 rest2">Nuestras mieles tienen aplicación nutricional, pueden
              degustarse directamente, en mesa, en platillos en cocina, en panaderías, pastelerías, en
              confitería(caramelos, granola, etc.), en cosméticos (cremas, shampoo, etc.), en coadyuvantes para la
              salud, jarabes, elaboraciónde cervezas, etc.</p>
            <a class="btn btn-primary"
              href="http://xixha.com/wp-content/uploads/2019/06/Ficha-TecnicaMiel-Xixha-100619.pdf"
              role="button">Detalles &raquo;</a>
          </div>
        </div>
      </div>
    </div>
    <!-- #Footer-->
    <div
      class="container foorter-color-e col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto card-footer mx-auto e-alineacion">
      <span class="foorter-color-e">&copy;Xixhá 2019</span>
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