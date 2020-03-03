<?php
$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

/*
Condicionamos si no es el directorio raiz
y si esta en el directorio public regresamos un false
*/
if ($uri !== '/' && file_exists(__DIR__.'/public'.$uri)) {
    return false;
}
//llamamos el archivo index.php
require_once __DIR__.'/public/index.php';