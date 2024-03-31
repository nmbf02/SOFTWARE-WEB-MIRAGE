<?php

namespace App\Http\Controllers;

class consultarVehiculoController extends Controller
{
    /**
     * Muestra la página de consulta de cotizacion.
     *
     * @param string|null $numerovehiculo Número de la cotizacion opcional
     * @return \Illuminate\Http\Response
     */
    public function consultarVehiculo($numerovehiculo = null)
    {
        return view('components.vehiculo.consultavehiculo', compact('numerovehiculo'));
    }
}