<?php
/*
|--------------------------------------------------------------------------
| Manejo de errores
|--------------------------------------------------------------------------| 
| # El manejador de errores y excepciones en laravel esta definido para manejar
|   cualquier tipo de eventos y errores se visualizara en el navegador si 
|   APP_DEBUG es true, de caso false no se visualizara nada en el navegador, 
|   pero laravel genera un archivo log en cual se registra todos eventos.
*/
    namespace xixha\Exceptions;
    use Exception;
    use Illuminate\Validation\ValidationException;
    use Illuminate\Auth\Access\AuthorizationException;
    use Illuminate\Database\Eloquent\ModelNotFoundException;
    use Symfony\Component\HttpKernel\Exception\HttpException;
    use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler{
    protected $dontReport = [
        AuthorizationException::class,
        HttpException::class,
        ModelNotFoundException::class,
        ValidationException::class,
    ];
    public function report(Exception $e){
        parent::report($e);
    }
    public function render($request, Exception $e){
        return parent::render($request, $e);
    }
}