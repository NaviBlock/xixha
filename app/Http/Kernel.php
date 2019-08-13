<?php

namespace xixha\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    protected $middleware = [
        \Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode::class,
    ];

    protected $middlewareGroups = [
        'web' => [
            \xixha\Http\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \xixha\Http\Middleware\VerifyCsrfToken::class,
        ],

        'api' => [
            'throttle:60,1',
        ],
    ]; 

    protected $routeMiddleware = [
        'auth' => \xixha\Http\Middleware\Authenticate::class,    
        //**********************************************/    
        //'admin' => \xixha\Http\Middleware\AdminMiddleware::class,
        //'root' => \xixha\Http\Middleware\RootMiddleware::class,
        'super' => \xixha\Http\Middleware\SuperMiddleware::class,
        'user' => \xixha\Http\Middleware\UserMiddleware::class,  
        
        //**********************************************/      
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'bindings' => \Illuminate\Routing\Middleware\SubstituteBindings::class,
        'can' => \Illuminate\Foundation\Http\Middleware\Authorize::class,
        'guest' => \xixha\Http\Middleware\RedirectIfAuthenticated::class,
        'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
    ];
}
