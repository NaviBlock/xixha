<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Xixha Connect</title>

  <!--Bootstrap 4.3-->
  <link href="{{asset('css/bootstrap/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Main styles for this application-->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  <link href="{{asset('vendors/pace-progress/css/pace.min.css')}}" rel="stylesheet">
        
  <!-- Font Awesome-->
  <link href="{{asset('css/bootstrap/all.css')}}" rel="stylesheet">
    
  <!-- Theme style--> 
  <link rel="stylesheet" href="{{asset('css/AdminLTE.min.css')}}">
    
  <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load.--> 
  <link rel="stylesheet" href="{{asset('css/_all-skins.min.css')}}">
 
  <!--icon-->
  <link rel="apple-touch-icon" sizes="144x144" href="{{asset('img/apple-touch-icon.png')}}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{asset('img/favicon-32x32.png')}}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{asset('img/favicon-16x16.png')}}">
  <link rel="manifest" href="{{asset('img/site.webmanifest')}}">
  <link rel="mask-icon" href="{{asset('img/safari-pinned-tab.svg')}}" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="{{asset('img/mstile-144x144.png')}}">
  <meta name="theme-color" content="#ffffff">

  <!--Code in-->
  <link rel="stylesheet" href="{{asset('css/stylehome.css')}}">
<!---------------------------------------------------------------------------------------------->
</head>
<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">        
<header class="app-header navbar">
  <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">
    <img class="navbar-brand-full" src="{{asset('img/brand/logo.svg')}}" width="100" height="95" alt="Xixha Logo">
    <img class="navbar-brand-minimized" src="{{asset('img/brand/sygnet.svg')}}" width="30" height="30" alt="CoreUI Logo">
  </a>
  <ul class="nav navbar-nav d-md-down-none">
    <li class="nav-item px-3">
      <a class="nav-link" href="{{asset('home')}}">Dashboard</a>
    </li>
  </ul>
    <ul class="nav navbar-nav ml-auto">
      <li class="nav-item d-md-down-none">
        <a class="nav-link" href="#">
          <i class="icon-list"></i>
        </a>
      </li>
      <li class="nav-item d-md-down-none">
        <a class="nav-link" href="#">
          <i class="icon-location-pin"></i>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
          <img class="img-avatar" src="{{asset('img/avatars/7.jpg')}}" alt="alejandrohernandezvalle@gmail.com">
        </a>
        <div class="dropdown-menu dropdown-menu-right">
        <div class="dropdown-header text-center">
          <strong>Cuenta</strong>
        </div>
        <a class="dropdown-item" href="#">
          <i class="fa fa-user"></i> Perfil</a>
        <a class="dropdown-item" href="#">
          <i class="fa fa-wrench"></i> Configuraciones</a>
          <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{url('/logout')}}">
              <i class="fa fa-lock"></i> Salir</a>
          </div>
        </li>
      </ul>  
      <button class="navbar-toggler aside-menu-toggler d-lg-none" type="button" data-toggle="aside-menu-show">
        <span class="navbar-toggler-icon"></span>
      </button>
</header>  
<div class="app-body">
  <div class="sidebar">
    <div class="sidebar-nav">
      <div class="nav">
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="nav-icon icon-speedometer"></i> Dashboard
              <span class="badge badge-primary">Xixhá</span>
            </a>
          </li>
        <div class="pos-f-t contrainer-fluid">
        <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
          <li class="nav-title">Almacé</li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/almacen/articulo')}}">
              <i class="nav-icon icon-drop"></i> Artículos
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/almacen/categoria')}}">
              <i class="nav-icon icon-drop"></i> Categorías
            </a>
          </li>
          <li class="nav-title">Compras</li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/compras/ingreso')}}">
              <i class="nav-icon icon-drop"></i> Ingreso
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/compras/proveedor')}}">
              <i class="nav-icon icon-drop"></i> Proveedor
            </a>
          </li>

          <li class="nav-title">Vetas</li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/ventas/venta')}}">
              <i class="nav-icon icon-drop"></i> Venta
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/ventas/cliente')}}">
              <i class="nav-icon icon-drop"></i> Cliente
            </a>
          </li>

          <li class="nav-title">Acceso</li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('seguridad/usuario')}}">
              <i class="nav-icon icon-drop"></i> Usuarios
            </a>
          </li>
        </div>
      </div>
      <nav class="navbar navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </nav>
    </div>
        </div>
      </div>
    </div>
  </div>
<div class="content-wrapper">
  <section class="content">
    <div class="row">
        <div class = "col-lg-12 col-sm-12 col-md-12 col-xs-12">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">XIXHÁ</h3>
            <div class="box-tools pull-right">
              <button class="btn btn-box-tool" data-widget="collapse">
                <i class="fa fa-minus"></i>
              </button>
              <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
            <div class="box-body">
              <div class="row">
                <div class = "col-lg-12 col-sm-12 col-md-12 col-xs-12">
                  @yield('contenido')
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<!------------------------------------------------------------------------------------------------------------->
<footer class="app-footer">
  <div>
    <a href="#">Xixhá</a>
    <span>&copy; 2019 Xixhá.</span>
  </div>
  <div class="ml-auto">
    <span>Powered by</span>
      <a href="#">Xixhá</a>
  </div>
</footer>
  <!----------------------------------------------------------------------------------------------->
  <!-- jQuery 2.1.4 -->
  <script src="{{asset('js/jQuery-2.1.4.min.js')}}"></script>
  @stack('scripts')

  <!-- Bootstrap 3.3.5-->
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <!--AdminLTE App-->
  <script src="{{asset('js/app.min.js')}}"></script>
      
  <!--Bootsap 4.3-->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <!--Bootsap Select-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.10/dist/js/bootstrap-select.min.js"></script>
  </body>
</html>