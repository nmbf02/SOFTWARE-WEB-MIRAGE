<?php

/**
 * Archivo de rutas web.
 */

use App\Http\Controllers\VehicleConfigurationController;
use App\Http\Controllers\GeneralConfigurationController;
use App\Http\Controllers\VehicleRegisterController;
use App\Http\Controllers\CustomerRegisterController;
use App\Http\Controllers\SalesRegisterController;
use Illuminate\Support\Facades\Route;

/**
 * Ruta para obtener la configuración de vehículos
 *
 * @route GET /vehicle-configuration
 * @controller VehicleConfigurationController
 * @method index
 */
Route::get('vehicle-configuration', [VehicleConfigurationController::class, 'index']);
Route::get('general-configuration', [GeneralConfigurationController::class, 'index']);
Route::get('vehicle-register', [VehicleRegisterController::class, 'index'])->name('registerVehicle');
Route::get('vehicle-register/{id}', [VehicleRegisterController::class, 'edit'])->name('editVehicle');
Route::get('customer-register', [CustomerRegisterController::class, 'index']);
Route::get('sales-register', [SalesRegisterController::class, 'index']) -> name ('salesRegister') ;

include('web2.php');
