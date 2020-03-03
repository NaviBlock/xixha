<?php
//|-------------------------------------------------------------------
/* #Incluimos el archivo autoload en el arranque del servidor.*/
/* #La opción "A" se debe activar cuando se suba el archivo al servidor 
    de producción.*/
/* #Opción A*///require __DIR__.'/xixha/bootstrap/autoload.php';
/* #La opción B se debe activar cuando el sistema desarrolle en el 
    servidor de developer o testing.*/
/* #Opción B*/require __DIR__.'bootstrap/autoload.php';
//|-------------------------------------------------------------------
/* #Incluimos en la variable app el directorio para el arranque del servidor.*/
/* #La opción "C" se debe activar cuando se suba el archivo al servidor 
    de producción.*/
/* #Opción C*///$app = require_once __DIR__.'/xixha/bootstrap/app.php';
/* #La opción D debe estar de activa cuando el sistema desarrolle en el
    servidor local o developer o testing.*/
/* #Opción D*/$app = require_once __DIR__.'bootstrap/app.php';
//|-------------------------------------------------------------------
//# Nucleo o kernel de laravel. 
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);
$response->send();
$kernel->terminate($request, $response);