<?php

namespace App\Http\Controllers;

use App\Models\Grupovehiculo;
use App\Models\Marcavehiculo;
use Illuminate\Http\Request;

class VehiculoController extends Controller
{
    public function showConfigurarVehiculo()
    {
        // Obtén todos los Grupovehiculo de la base de datos
        $gruposVehiculo = Grupovehiculo::all();
        $marcaVehiculo = Marcavehiculo::all();

        // Pasa los datos a la vista
        return view('components.vehiculo.configurar-vehiculo', 
        ['gruposVehiculo' => $gruposVehiculo],
        ['marcaVehiculo' => $marcaVehiculo]);
    }
}