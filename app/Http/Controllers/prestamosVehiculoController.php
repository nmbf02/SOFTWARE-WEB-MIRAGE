<?php

namespace App\Http\Controllers;

class prestamosVehiculoController extends Controller
{
    /**
     * Muestra la página de la configuracion de prestamos
     *
     * @param string|null $mantenimientoPrestamosVehiculo 
     * @return \Illuminate\Http\Response
     */
    public function mantenimientoPrestamosVehiculo($mantenimientoPrestamosVehiculo = null)
    {
        return view('components.prestamos.mantenimiento-prestamos-vehiculos', compact('mantenimientoPrestamosVehiculo'));
    }
}