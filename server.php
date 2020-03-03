<?php
/*
|--------------------------------------------------------------------------
| # Sipax
|--------------------------------------------------------------------------
| Cuando iniciamos el desarrollo de una aplicación en el servidor es 
| necesario configurar el directorio raiz, así como el archivo de configuración.
*/


$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

/*
| Condicionamos si no es el directorio raiz y si esta disponible en el 
| directorio public regresamos un false al servidor.
*/
if ($uri !== '/' && file_exists(__DIR__.'/public'.$uri)) {
    return false;
}
//incluimos el archivo index.php de la carpeta public
require_once __DIR__.'/public/index.php';