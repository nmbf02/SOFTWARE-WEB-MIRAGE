<?php

namespace App\Http\Controllers;

use App\Models\Grupovehiculo;
use App\Models\Marcavehiculo;
use App\Models\Modelovehiculo;
use App\Models\Acabadocolorvehiculo;
use Illuminate\Http\Request;

class VehicleConfigurationController extends Controller
{
    public function index()
    {
        $acabadoVehiculo = Acabadocolorvehiculo::all();
        $vehicleGroups = Grupovehiculo::all();
        $marcaVehiculo = Marcavehiculo::all();
        $Modelovehiculo = Modelovehiculo::all();

        return view('components.vehiculo.configurar-vehiculo', [
            'gruposVehiculo' => $vehicleGroups,
            'marcaVehiculo' => $marcaVehiculo,
            'modeloVehiculo' => $Modelovehiculo,
            'acabadoVehiculo' => $acabadoVehiculo,
        ]);
    }
}
