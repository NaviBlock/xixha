<?php
/*Clase para la implementar un Test*/
class TestCase extends Illuminate\Foundation\Testing\TestCase
{   
    /*Dirección URL en donde se va aplicar el modelo de testing*/
    protected $baseUrl = 'http://localhost';
    
    /*
    | # Se crear un modelo en la aplicación en donde se aplica los test
    */
    public function createApplication()
    {
        $app = require __DIR__.'/../bootstrap/app.php';
        $app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();
        return $app;
    }
}