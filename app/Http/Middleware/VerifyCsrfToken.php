<?php
/*
|--------------------------------------------------------------------------
| Componente a librerias
|--------------------------------------------------------------------------| 
*/
    namespace xixha\Http\Middleware;
    use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;
    /*
    |--------------------------------------------------------------------------
    | Componente VerifyCsrfToken
    |--------------------------------------------------------------------------
    |
    */
        class VerifyCsrfToken extends BaseVerifier{
            protected $except = [        
            ];
        }