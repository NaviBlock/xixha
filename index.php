<?php
//require __DIR__.'/xixha/bootstrap/autoload.php';
require __DIR__.'bootstrap/autoload.php';

//$app = require_once __DIR__.'/xixha/bootstrap/app.php';
$app = require_once __DIR__.'bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);
$response->send();
$kernel->terminate($request, $response);