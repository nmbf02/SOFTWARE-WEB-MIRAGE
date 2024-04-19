<?php

use App\Http\Controllers\VehicleConfigurationController;
use Illuminate\Support\Facades\Route;

Route::get('vehicle-configuration', [VehicleConfigurationController::class, 'index']);

include('web2.php');