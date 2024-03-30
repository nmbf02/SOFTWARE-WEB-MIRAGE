<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\consultarFacturaController;
use App\Http\Controllers\consultarCotizacionController;
use App\Http\Controllers\consultarSubastaController;
use App\Http\Controllers\consultarRentaController;
use App\Http\Controllers\consultarNominaController;

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

     Route::get('/consultar-subasta/{numerosubasta?}', [consultarSubastaController::class, 'consultarSubasta'])
     ->middleware(['auth'])
     ->name('consultar-subasta');

     Route::get('/consultar-renta/{numerorenta?}', [consultarRentaController::class, 'consultarRenta'])
     ->middleware(['auth'])
     ->name('consultar-renta');

     Route::get('/consultar-nomina/{numeronomina?}', [consultarNominaController::class, 'consultarNomina'])
     ->middleware(['auth'])
     ->name('consultar-nomina');