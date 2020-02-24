<?php

/*llamamos el archivo autoload*/
/*La opción A para el modo servidor*/
/*A*///require __DIR__.'/xixha/bootstrap/autoload.php';

/*La opción B para el modo desarrollador*/
/*B*/require __DIR__.'bootstrap/autoload.php';

/*llamamos el archivo app*/
/*La opción A para el modo servidor*/
/*A*///$app = require_once __DIR__.'/xixha/bootstrap/app.php';

/*La opción B para el modo desarrollador*/
/*B*/$app = require_once __DIR__.'bootstrap/app.php';

/*Funcion de laravel no cambia en el servidor 
y en el modo desarrollador*/
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);
$response->send();
$kernel->terminate($request, $response);