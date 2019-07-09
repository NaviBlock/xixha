<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <title>SIPAX</title>

    <!-- Fonts -->
    <!--link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700"-->

    <!-- Styles -->
    <!--link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}--->

<!--EStilos--> 
<link rel="stylesheet" href="{{asset('css/estilo.css')}}">
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!--style>
        body { 
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style-->
</head>
<body id="app-layout">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div  class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="/"><img src="{{asset('img/logos.png')}}" style="width:20%" alt="Logo site"></a>                
                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <!--span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span-->
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link e-texto-one" href="http://xixha.com">Xixhá</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{asset('register')}}">Registro</a>
                    </li>
                </ul>
            </div>
                <!-- Branding Image -->
                <!--a class="navbar-brand" href="{{ url('/') }}">
                    Xixhá
                </a--> 
        </div>
 
            <!--div class="collapse navbar-collapse" id="app-navbar-collapse">
                <-- Right Side Of Navbar -->
                <!--ul class="nav navbar-nav navbar-right">
                    <-- Authentication Links --
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Cerrar Sesión</a></li>
                            </ul>
                        </li>
                    @endif
                </ul--
            </div-->
    </nav>


    <header class="main-header">
    <div class="background-overlay text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center justify-content-center align-self-center">
                    <h1 class="e-titulo">Padrón de Apicultores Activo</h1>
                    <div class="col-md-12 col-sm-12 col-lg-12 col-12 col-xl-12">    
                        @yield('content')
                    </div>
                </div>
                <!--div class="col-md-6 text-center py-2">                
                    <img src="{{asset('img/mapa.png')}}" alt="Logo Estado" class="img-fluid e-mapa">     
                </div-->
            </div>
        </div>
    </div>    
    <footer>
        <div class="container p-3 text-center text-white">
            <p>xixhá &copy; 2019</p>
        </div>
    </footer>
    <div class="wave">
        <div style="height: 150px; overflow: hidden;"><svg viewBox="0 0 400 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C277.93,134.70 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path></svg></div>
    </div> 

    <!-- JavaScripts -->
    <!--script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}-->
    
    <!--Bootstrap JS-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
