<?php

namespace App\Http\Controllers;

use App\Models\Grupovehiculo;
use App\Models\Marcavehiculo;
use App\Models\Modelovehiculo;
use Illuminate\Http\Request;

class VehicleConfigurationController extends Controller
{
    public function index()
    {
        $vehicleGroups = Grupovehiculo::all();
        $marcaVehiculo = Marcavehiculo::all();
        $Modelovehiculo = Modelovehiculo::all();

        return view('components.vehiculo.configurar-vehiculo', [
            'gruposVehiculo' => $vehicleGroups,
            'marcaVehiculo' => $marcaVehiculo,
            'modeloVehiculo' => $Modelovehiculo
        ]);
    }
}
