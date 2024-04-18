<?php

namespace App\Http\Controllers;

use App\Models\Marcavehiculo;

class configurarVehiculoController extends Controller
{
    /**
     * Muestra la página de configuracion de vehículo
     *
     * @param string|null $configuracionvehiculo 
     * @return \Illuminate\Http\Response
     */
    public function configuracionVehiculo($configuracionvehiculo = null)
    {
        $gruposVehiculo = Marcavehiculo::all();
        return view('components.vehiculo.configurar-vehiculo', compact('configuracionvehiculo', 'gruposVehiculo'));
    }
}