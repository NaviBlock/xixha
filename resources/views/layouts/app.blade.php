<?php/*
|--------------------------------------------------------------------------
| Vista App
|--------------------------------------------------------------------------
| En esta vista se invoca el HEAD del documento HTML 
*/?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIPAX</title>
    <?php //#Bootstrap?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <?php //#Utilizamos la propiedad asset para llamar los recursos nuestros estilos CSS?>
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
</head>

<body>
    <div class="card">
        <div class="card-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="text-center col-auto col-md-12 my-4">
                        <a class="navbar-brand">
                            <div class="col-sm-6">
                                <img class="img-fluid imgz" src="{{asset('img/sipaxQ.png')}}" alt="sipax">
                            </div>
                        </a>
                        <h1 class="card-title e-color text-center text-uppercase text-t">Padrón de Apicultores</h1>
                        <?php //#llamamos en cada contenido a nuestra vista app?>
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-center text-white footer">
        <a href="http://xixha.com/">
            <p class="e-color alt-f">xixhá &copy; 2019</p>
        </a>
    </div>

    <!-- #Bootstrap JS-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

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