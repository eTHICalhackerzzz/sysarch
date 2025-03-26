<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
//23222
//67094
//304935
return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php', // coommit
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) { //23454
        //kkowowo
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //098329
    })->create();//023233
