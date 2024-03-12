<?php

namespace App\Exceptions;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];
    
    private $url = ['career', 'course', 'environment_type', 'instructor', 'learning_environment', 'location', 'scheduling_environment'];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });

        $this->renderable(function(NotFoundHttpException $e, $request)
        {
            //añade el prefijo api/ a la lista de urls
            $urlFinal = preg_filter('!^/', 'api/', $this->url);    
            //añade el sufijo /* a la lista de urls
            $urlFinal = preg_filter('$/', '/*', $this->url); 

            if($request->is($urlFinal))
            {
                return response()->json([
                    'message' => 'URL  no encontrada',
                ], Response::HTTP_NOT_FOUND);
            }
        });

        $this->renderable(function(MethodNotAllowedException $e, $request)
        {

            {
                return response()->json([
                    'message' => 'Metodo no encontrado o soportado',
                ], Response::HTTP_METHOD_NOT_ALLOWED);
            }
        });
    }

    public function render($request, Throwable $exception)
    {
        if($exception instanceof AuthorizationException)
        {
            return response()->json([
                'message' => 'Acceso  prohibido al recurso',
            ], Response::HTTP_FORBIDDEN);
        }

        if($exception instanceof RouteNotFoundException)
        {
            return response()->json([
                'message' => 'Debe iniciar sesion',
            ], Response::HTTP_UNAUTHORIZED);
        }

        return parent::render($request, $exception);
    }
}
