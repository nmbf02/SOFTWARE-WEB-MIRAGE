<?php

namespace App\Http\Controllers;

class solicitudPrestamoVehiculoController extends Controller
{
    /**
     * Muestra la página de consulta de subasta.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string|null  $numerosolicitudprestamo  El ID de la solicitud, opcional.
     * @return \Illuminate\Http\Response
     */
    public function solicitudPrestamoVehiculo($numerosolicitudprestamo = null)
    {
        return view('components.prestamos.solicitud-prestamos-vehiculo', compact('numerosolicitudprestamo'));
    }
}