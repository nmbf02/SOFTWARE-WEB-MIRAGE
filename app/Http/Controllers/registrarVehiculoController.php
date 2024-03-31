<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrarVehiculoController extends Controller
{
    /**
     * Muestra la página de registro de vehículo.
     *
     * @param  Request  $request
     * @param  string|null  $vehiculo  ID o dato del vehículo opcional
     * @return \Illuminate\View\View
     */
    public function registrarVehiculo(Request $request, $vehiculo = null)
    {
        // Asegúrate de que la vista 'components.vehiculo.registrovehiculo' exista
        // dentro de la carpeta resources/views
        return view('components.vehiculo.registrovehiculo', compact('vehiculo'));
    }
}
