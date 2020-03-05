<?php
/*
| # En este archivo index.php lo que hace es llamar los archivos de
|   arranque bootstrap que utilizar laravel para funcionar con el servidor,
|   estos archivos son llamado con "require", si esta en modo producción
|   tienen que añadir la "directorio del proyecto" para, en caso que esten 
|   trabajando en developer tiene que quitar el "directorio del proyecto".
*/

//|-------------------------------------------------------------------
/* #La opción "A" se debe activar cuando se suba el archivo al servidor 
    de producción.*/
/* #Opción A*///require __DIR__.'/xixha/bootstrap/autoload.php';

/* #La opción B se debe activar cuando el sistema se desarrolle en el 
    servidor de developer o testing.*/
/* #Opción B*/require __DIR__.'bootstrap/autoload.php';
//|-------------------------------------------------------------------

/* #La opción "C" se debe activar cuando se suba el archivo al servidor 
    de producción.*/
/* #Opción C*///$app = require_once __DIR__.'/xixha/bootstrap/app.php';

/* #La opción D debe estar de activa cuando el sistema desarrolle en el
    servidor local o developer o testing.*/
/* #Opción D*/$app = require_once __DIR__.'bootstrap/app.php';
//|-------------------------------------------------------------------

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);
$response->send();
$kernel->terminate($request, $response);