<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Xixha Connect</title>
    
  <!--Bootstrap 4.3-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.10/dist/css/bootstrap-select.min.css">

  <!--Code Jquery-->
  <script src="https://code.jquery.com/jquery-3.4.0.slim.min.js" integrity="sha256-ZaXnYkHGqIhqTbJ6MB4l9Frs/r7U4jlx7ir8PJYBqbI=" crossorigin="anonymous"></script>
        
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('css/AdminLTE.min.css')}}">
    
  <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{asset('css/_all-skins.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/stylehome.css')}}">
  

  <!--icon-->
  <link rel="apple-touch-icon" sizes="144x144" href="{{asset('img/apple-touch-icon.png')}}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{asset('img/favicon-32x32.png')}}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{asset('img/favicon-16x16.png')}}">
  <link rel="manifest" href="{{asset('img/site.webmanifest')}}">
  <link rel="mask-icon" href="{{asset('img/safari-pinned-tab.svg')}}" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="{{asset('img/mstile-144x144.png')}}">
  <meta name="theme-color" content="#ffffff">

<!-- Icons-->
<link href="{{asset('node_modules/@coreui/icons/css/coreui-icons.min.css')}}" rel="stylesheet">
    <link href="{{asset('node_modules/flag-icon-css/css/flag-icon.min.css')}}" rel="stylesheet">
    <link href="{{asset('node_modules/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('node_modules/simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/pace-progress/css/pace.min.css')}}" rel="stylesheet">

    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      // Shared ID
      gtag('config', 'UA-118965717-3');
      // Bootstrap ID
      gtag('config', 'UA-118965717-5');
    </script>
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
            <a class="dropdown-item" href="{{asset('logout')}}">
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
            <a class="nav-link" href="{{asset('almacen/articulo')}}">
              <i class="nav-icon icon-drop"></i> Artículos
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{asset('almacen/categoria')}}">
              <i class="nav-icon icon-drop"></i> Categorías
            </a>
          </li>
          <li class="nav-title">Compras</li>
          <li class="nav-item">
            <a class="nav-link" href="{{asset('compras/ingreso')}}">
              <i class="nav-icon icon-drop"></i> Ingreso
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{asset('compras/proveedor')}}">
              <i class="nav-icon icon-drop"></i> Proveedor
            </a>
          </li>

          <li class="nav-title">Vetas</li>
          <li class="nav-item">
            <a class="nav-link" href="{{asset('ventas/venta')}}">
              <i class="nav-icon icon-drop"></i> Venta
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{asset('ventas/cliente')}}">
              <i class="nav-icon icon-drop"></i> Cliente
            </a>
          </li>

          <li class="nav-title">Acceso</li>
          <li class="nav-item">
            <a class="nav-link" href="{{asset('seguridad/usuario')}}">
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
<!------------------------------------------------------------------------------------------------------------->
<!--Colocar mas contenido para el inicio-->
<!------------------------------------------------------------------------------------------------------------->
    <footer class="app-footer">
      <div>
        <a href="#">Xixhá</a>
        <span>&copy; 2019 Xixhá.</span>
      </div>
      <div class="ml-auto">
        <span>Powered by</span>
        <a href="h#">Xixhá</a>
      </div>
    </footer>
    <!----------------------------------------------------------------------------------------------->
    <!-- jQuery 2.1.4 -->
    <script src="{{asset('js/jQuery-2.1.4.min.js')}}"></script>
    @stack('scripts')

    <!-- Bootstrap 3.3.5 -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('js/app.min.js')}}"></script>

    <!--Bootsap Select-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.10/dist/js/bootstrap-select.min.js"></script>
    <!--Bootsap 4.3-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- CoreUI and necessary plugins-->
    <script src="{{asset('node_modules/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('node_modules/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('node_modules/pace-progress/pace.min.js')}}"></script>
    <script src="{{asset('node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('node_modules/@coreui/coreui/dist/js/coreui.min.js')}}"></script>
    <!-- Plugins and scripts required by this view-->
    <script src="{{asset('node_modules/chart.js/dist/Chart.min.js')}}"></script>
    <script src="{{asset('node_modules/@coreui/coreui-plugin-chartjs-custom-tooltips/dist/js/custom-tooltips.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
  </body>
</html>