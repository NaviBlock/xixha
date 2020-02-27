<?php
$app = new Illuminate\Foundation\Application(
    realpath(__DIR__.'/../')
);
$app->singleton(
    Illuminate\Contracts\Http\Kernel::class,
    xixha\Http\Kernel::class
);
$app->singleton(
    Illuminate\Contracts\Console\Kernel::class,
    xixha\Console\Kernel::class
);
$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    xixha\Exceptions\Handler::class
);
return $app;