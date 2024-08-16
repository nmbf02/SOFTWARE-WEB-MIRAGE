<?php

namespace App\Http\Controllers;

class registrarMantenimientoVehiculoController extends Controller
{
    /**
     * Muestra la página de registro de mantenimiento de vehiculo
     *
     *
     *
     */
    public function mantenimientoVehiculo()
    {
        return view('components.mantenimiento.mantenimiento-vehiculo');
    }
}
