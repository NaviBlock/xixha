<?php

namespace xixha\Providers;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider{
    public function boot(){
        //Zona horaria en donde se ejecuta la aplicación
        date_default_timezone_set('America/Mexico_City');
    }
    public function register(){
    }
}