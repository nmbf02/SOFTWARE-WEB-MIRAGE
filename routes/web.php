<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\consultarFacturaController;
use App\Http\Controllers\consultarCotizacionController;
use App\Http\Controllers\registrarvehiculoController;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/consultar-factura/{numerofactura?}', [consultarFacturaController::class, 'consultarFactura'])
    ->middleware(['auth'])
    ->name('consultar-factura');

Route::get('/consultar-cotizacion/{numerocotizacion?}', [consultarCotizacionController::class, 'consultarCotizacion'])
    ->middleware(['auth'])
    ->name('consultar-cotizacion-factura');

Route::get('/registrar-vehiculo/{vehiculo?}', [registrarVehiculoController::class, 'registrarVehiculo'])
    ->middleware(['auth'])
    ->name('registrar-vehiculo');
