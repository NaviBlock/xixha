<?php
/*
|--------------------------------------------------------------------------
| Componente a librerias
|--------------------------------------------------------------------------| 
*/
    namespace xixha\Http\Middleware;
    use Illuminate\Cookie\Middleware\EncryptCookies as BaseEncrypter;
    /*
    |--------------------------------------------------------------------------
    | Componente EncryptCookies
    |--------------------------------------------------------------------------
    | Componente de Encriptación de laravel encripta la cookies que se genera en
    | la session del usuario
    */
        class EncryptCookies extends BaseEncrypter{
            protected $except = [
            ];
        }