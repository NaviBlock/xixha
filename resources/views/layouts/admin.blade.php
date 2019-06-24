<!DOCTYPE html>
<html lang="es"> 
<head> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SSAX</title>
  <link href="{{asset('css/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/iman.css')}}">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <img class="navbar-brand-minimized" src="{{asset('img/brand/sygnet.svg')}}" width="90" height="90" alt="Xixha Logo">     
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">                   
          <a class="nav-link" href="{{asset('home')}}">Inicio</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="{{asset('home')}}" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Perfil
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="{{asset('home')}}">Usuario</a>
            <a class="dropdown-item"  href="{{url('/logout')}}">Salir</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>
  @yield('contenido')
  <script src="{{asset('js/jquery-3.3.1.slim-cnd.min.js')}}"></script>
  <script src="{{asset('js/popper-cnd.min.js')}}"></script>
  <script src="{{asset('js/bootstrap-cnd.min.js')}}"></script>
  @stack('scripts')
</body>
</html>