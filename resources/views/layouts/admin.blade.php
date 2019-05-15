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
<!---------------------------------------------------------------------------------------------->
</head>
<body>         
    <div class="pos-f-t text-primary textc">
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-primary p-4">
                <ul class="list-group nav navbar-warnig bg-primary">
                  <!--Lista Almacén->Artículos->Categorías-->
                    <li class="list-group-item active-primary bg-dark fas fa-store-alt">
                      <a href="#" title="almacen">Almacén</a><br>
                      <ul class="treeview-menu">
                        <li><a href="{{asset('almacen/articulo')}}"><i class="fas fa-solar-panel"></i> Artículos</a></li><br>
                        <li><a href="{{asset('almacen/categoria')}}"><i class="fas fa-expand"></i> Categorías</a></li><br>
                      </ul>
                    </li>

                    <!--Lista Proveedor->Registro-->
                    <li class="list-group-item active-primary bg-white fas fa-store-alt">
                      <a href="#" title="proveedor">Proveedor</a><br>
                      <ul class="treeview-menu">
                        <li><a href="{{asset('compras/proveedor/create')}}"><i class="fas fa-solar-panel"></i> Registro</a></li><br>
                      </ul>
                    </li>

                    <!--Lista Compras->Ingresos->Proveedores-->
                    <li class="list-group-item bg-dark fas fa-store-alt">
                      <a href="#" title="almacen">Compras</a><br>
                      <ul class="treeview-menu">
                        <li><a href="{{asset('compras/ingreso')}}"><i class="fas fa-solar-panel"></i>Ingreso</a></li><br>
                        <li><a href="{{asset('compras/proveedor')}}"><i class="fas fa-expand"></i>Proveedor</a></li><br>
                      </ul>
                    </li>

                    <!--Ventas->Venta->Clientes-->
                    <li class="list-group-item bg-white fas fa-store-alt">
                      <a href="#" title="almacen">Ventas</a><br>
                      <ul class="treeview-menu fas fa--shopping-cart">
                        <li><a href="{{asset('ventas/venta')}}"><i class="fas fa-user-circle"></i>Venta</a></li><br>
                        <li><a href="{{asset('venta/cliente')}}"><i class="fas fa-expand"></i>Clientes</a></li><br>
                      </ul>
                    </li>

                    <!--Acceso->Usuario-->
                    <li class="list-group-item bg-dark fas fa-cog">
                      <a href="#" title="almacen">Acceso</a><br>
                      <ul class="treeview-menu">
                        <li><a href="{{asset('configuracion/usuario')}}"><i class="fas fa-user-astronaut"></i> Usuario</a></li>
                      </ul>
                    </li>
                </ul>
            </div>
        </div>
        <nav class="navbar navbar-dark bg-primary">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        </nav>  
    </div>
<!------------------------------------------------------------------------------------------------------------->
    <div class="box-body">
      <div class="row">
        <div class = "col-lg-12 col-sm-12 col-md-12 col-xs-12">
          @yield('contenido')
        </div>
      </div>
    </div>
<!------------------------------------------------------------------------------------------------------------->
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
  </body>
</html>
