<?php

namespace App\Http\Controllers;

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
        return view('components.vehiculo.configurar-vehiculo', compact('configuracionvehiculo'));
    }
}