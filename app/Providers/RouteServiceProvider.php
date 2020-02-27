<?php

namespace xixha\Providers;
use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider{
    protected $namespace = 'xixha\Http\Controllers';
    public function boot(Router $router){
        parent::boot($router);
    }
    public function map(Router $router){
        $this->mapWebRoutes($router);
    }
    protected function mapWebRoutes(Router $router){
        $router->group([
            'namespace' => $this->namespace, 'middleware' => 'web',
        ], function ($router) {
            require app_path('Http/routes.php');
        });
    }
}