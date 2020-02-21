<?php

// llamamos el archivo autoload para arrancar el servidor
//require __DIR__.'/xixha/bootstrap/autoload.php';
require __DIR__.'bootstrap/autoload.php';

// llamamos el archivo app para arrancar los servicios del servidor
//$app = require_once __DIR__.'/xixha/bootstrap/app.php';
$app = require_once __DIR__.'bootstrap/app.php';

//Guardamos la direccion en la variable kernel en kernel
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

//Guardamos la direccion en la variable response
$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);
//response apunto a la funcion enviar en laravel
$response->send();
//kernel apunta a la funcion terminate enviando dos variable para finalizar
$kernel->terminate($request, $response);