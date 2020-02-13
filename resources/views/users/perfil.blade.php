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
			<a href="{{url('/')}}"><img class="navbar-brand-minimized" src="{{asset('img/sipaxQ.png')}}" width="90"
					height=75 alt="Xixha Logo"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
				aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation" id="menux"><span
					class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarText">
				<a class="nav-link e-coloresx px-2">{{auth()->user()->name}} </a>
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active"><a class="dropdown-item e-coloresx text-center te4"
							href="{{url('users/padron')}}">Padrón</a></li>
					<li class="nav-item active"><a class="dropdown-item e-coloresx text-center te4"
							href="{{url('users/perfil')}}">Perfil</a></li>
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

		<!-- Titulo de perfil-->
		<div class="container-fluid">
			<div
				class="col-lg-6 col-md-6 col-sm-6 col-xs-6 offset-lg-3 offset-md-3 offset-sm-3 offset-xs-3 text-center">
				<h3 class="e-text-color text-bor">Perfil del Apicultor</h3>
			</div>
		</div>

		<!-- #Data-->
		<div class="container-fluid">
			<div class="row">
				<div class="col-2"></div>
				<div class="col-8">
					<label class="md-textarea form-control lineA e-color-c text-center text-uppercase">{{auth()->user()->name}}</label>
					<label class="md-textarea form-control lineA e-color-c text-center text-lowercase">{{auth()->user()->email}}</label>
					<label class="md-textarea form-control lineA e-color-c text-center text-lowercase">{{auth()->perfil()->rol}}</label>
					<label class="md-textarea form-control lineA e-color-c text-center text-lowercase">{{auth()->perfil()->is_admin}}</label>
				</div>
				<div class="col-"></div>
			</div>
		</div>

		<?php /*
			$apix = auth()->user()->rol;
			$apiy = auth()->perfil()->nombre;					

			if($apiz == $apia){
				echo("test de test");									
			}elseif($apix=="Mr.Root"){
				echo("Test 2");
			}elseif($apix=="Super"){
				echo("Test 3");
			}else{
				echo("Consulte con el administrador");
			}
			echo Request::url();*/
			?>

		<!--#Footer-->
		<div class="container-fliud">
			<a href="http://xixha.com">
				<p class="foorter-color-e">&copy;Xixhá 2019</p>
			</a>
		</div>
	</div>

	<script src="{{URL('js/mainx.js')}}"></script>
	<!-- #annyang-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/annyang/2.6.0/annyang.min.js"></script>
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