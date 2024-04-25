<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Barryvdh\DomPDF\ServiceProvider;

$app = new Application(
    dirname(__DIR__)
);

// Registra el ServiceProvider de DomPDF
$app->register(ServiceProvider::class);

// Carga la configuración de DomPDF
$app->configure('dompdf');

// Aquí se pueden registrar otros Service Providers o Middleware si es necesario
// ...

$app->withRouting([
    'web' => __DIR__.'/../routes/web.php',
    'api' => __DIR__.'/../routes/api.php',
    'commands' => __DIR__.'/../routes/console.php',
    'health' => __DIR__.'/../public/health.php',
]);

$app->withMiddleware([
    // Middlewares globales y específicos de ruta se pueden registrar aquí
]);

$app->withExceptions([
    // La configuración de manejo de excepciones puede ser ajustada aquí
]);

return $app;


// <?php

// use Illuminate\Foundation\Application;
// use Illuminate\Foundation\Configuration\Exceptions;
// use Illuminate\Foundation\Configuration\Middleware;

// return Application::configure(basePath: dirname(__DIR__))

//     ->withRouting(
//         web: __DIR__.'/../routes/web.php',
//         api: __DIR__.'/../routes/api.php',
//         commands: __DIR__.'/../routes/console.php',
//         health: '/up',
//     )
//     ->withMiddleware(function (Middleware $middleware) {
//         //
//     })
//     ->withExceptions(function (Exceptions $exceptions) {
//         //
//     })->create();