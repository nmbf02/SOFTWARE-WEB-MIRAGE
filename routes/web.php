<?php
/**
 * Archivo de rutas web.
 */

 use App\Http\Controllers\VehicleConfigurationController;
 use App\Http\Controllers\GeneralConfigurationController;
 use App\Http\Controllers\VehicleRegisterController;
 use Illuminate\Support\Facades\Route;
 
 /**
  * Ruta para obtener la configuración de vehículos.
  *
  * @route GET /vehicle-configuration
  * @controller VehicleConfigurationController
  * @method index
  */
 Route::get('vehicle-configuration', [VehicleConfigurationController::class, 'index']);
 Route::get('general-configuration', [GeneralConfigurationController::class, 'index']);
 Route::get('vehicle-register', [VehicleRegisterController::class, 'index']);

 include('web2.php');