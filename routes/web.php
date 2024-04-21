<?php
/**
 * Archivo de rutas web.
 */

 use App\Http\Controllers\VehicleConfigurationController;
 use Illuminate\Support\Facades\Route;
 
 /**
  * Ruta para obtener la configuración de vehículos.
  *
  * @route GET /vehicle-configuration
  * @controller VehicleConfigurationController
  * @method index
  */
 Route::get('vehicle-configuration', [VehicleConfigurationController::class, 'index']);
 
 include('web2.php');