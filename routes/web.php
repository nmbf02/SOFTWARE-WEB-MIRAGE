<?php

/**
 * Archivo de rutas web.
 */

use App\Http\Controllers\VehicleConfigurationController;
use App\Http\Controllers\MaintenanceConfigurationController;
use App\Http\Controllers\GeneralConfigurationController;
use App\Http\Controllers\VehicleRegisterController;
use App\Http\Controllers\CustomerRegisterController;
use App\Http\Controllers\SalesRegisterController;
use App\Http\Controllers\employeeRegisterController;
use App\Http\Controllers\ServicioMantenimientoController;
use App\Http\Controllers\ServicioAceiteController;
use App\Http\Controllers\SugerenciaController;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/**
 * Ruta para obtener la configuración de vehículos
 *
 * @route GET /vehicle-configuration
 * @controller VehicleConfigurationController
 * @method index
 */
Route::get('vehicle-configuration', [VehicleConfigurationController::class, 'index'])->name('configurationVehicle');
Route::get('general-configuration', [GeneralConfigurationController::class, 'index'])->name('generalConfig');
Route::get('vehicle-register', [VehicleRegisterController::class, 'index'])->name('registerVehicle');
Route::get('vehicle-edit/{id}', [VehicleRegisterController::class, 'edit'])->name('editVehicle');
Route::get('customer-register', [CustomerRegisterController::class, 'index']);
Route::get('sales-register', [SalesRegisterController::class, 'index']) -> name ('salesRegister') ;
// Leudy
Route::get('employee-register', [employeeRegisterController::class, 'index'])->name('employeeRegister');

// Sugerencia
Route::get('suggestion', [SugerenciaController::class, 'index'])->name('sugerencia-mantenimiento');

//Nathaly
Route::get('services-maintenance', [ServicioMantenimientoController::class, 'index']) -> name ('ServicioMantenimiento') ;
Route::get('services-aceite', [ServicioAceiteController::class, 'index']) -> name ('ServicioAceite') ;
Route::get('maintenance-configuration', [MaintenanceConfigurationController::class, 'index'])->name('configurationVehicle');
include('web2.php');

Route::get('contactanos', function(){
    Mail::to('leudyluna99@gmail.com')
        ->send(new ContactanosMailable);

    return "Mensaje enviado";
})->name('contactanos');

