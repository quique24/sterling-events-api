<?php

namespace App\Exceptions;

use Exception;
use App\Exceptions\ClientException;
use Illuminate\Database\QueryException;
use Illuminate\Validation\ValidationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Auth\Access\AuthorizationException as AuthorizationException;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        if ($exception instanceof NotFoundHttpException) {
            return response()->json(['message' => 'Ups! maybe you are lost.'], 404);
        }

        if ($exception instanceof HttpException) {
            return response()->json(['message' => 'Whops! you cant.'], 403);
        }

        if ($exception instanceof ModelNotFoundException) {
            return response()->json(['message' => 'This is bad! resource not found.'], 404);
        }

        if ($exception instanceof QueryException) {
            return response()->json(['message' => 'Oh no! something is wrong.'], 500);
        }

        if ($exception instanceof AuthorizationException) {
            return response()->json(['message' => 'Stop! there is no permission.'], 401);
        }

        if ($exception instanceof ValidationException) {
            return response()->json(['message' => collect($exception->errors())->first()[0]], 403);
        }

        if ($exception instanceof ClientException) {
            return response()->json(['message' => $exception->getMessage()], 400);
        }

        if ($exception instanceof NotFoundHttpException) {
            return response()->json([
                'message' => 'Unauthorized',
                'error' => [
                    'log' => $exception->getMessage()
                ]
            ], 403);
        }

        if ($exception instanceof ModelNotFoundException) {
            return response()->json([
                'message' => 'Resource not found',
                'error' => [
                    'log' => $exception->getMessage()
                ]
            ], 404);
        }

        if ($exception instanceof QueryException) {
            if ($exception->getCode() == 23503){
                return response()->json([
                    'message' => 'The resource has items',
                    'error' => [
                        'log' => $exception->getMessage()
                    ]
                ], 500);
            } else {
                return response()->json([
                    'message' => 'Server Error',
                    'error' => [
                        'log' => $exception->getMessage()
                    ]
                ], 500);
            }
        }

        if ($exception instanceof MikrotikException) {
            return response()->json([
                'message' => 'Error Mikrotik',
                'error' => [
                    'log' => $exception->getMessage()
                ]
            ], 504);
        }

        if ($exception instanceof AuthorizationException) {
            return response()->json([
                'message' => 'Unauthorized',
                'error' => [
                    'log' => $exception->getMessage()
                ]
            ], 401);
        }

        if ($exception instanceof HttpException){
            return response()->json([
                'message' => 'Unauthorized',
                'error' => [
                    'log' => $exception->getMessage()
                ]
            ], 401);
        }

        if ($exception instanceof ClientException){
            return response()->json([
                'message' => 'The request contains incorrect syntax',
                'error' => [
                    'log' => $exception->getMessage()
                ]
            ], 400);
        }

        if ($exception instanceof \Tymon\JWTAuth\Exceptions\TokenExpiredException) {
            return response()->json(['error' => 'token is expired'], 400);
        } elseif ($exception instanceof \Tymon\JWTAuth\Exceptions\TokenInvalidException) {
            return response()->json(['error' => 'token is invalid'], 400);
        } elseif ($exception instanceof \Tymon\JWTAuth\Exceptions\JWTException) {
            return response()->json(['error' => 'token absent'], 400);
        }
        return parent::render($request, $exception);
    }
}
