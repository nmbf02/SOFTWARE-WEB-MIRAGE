<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VehiculoController extends Controller
{
    // Método para mostrar la vista del mantenimiento de vehículos
    public function mantenimientoVehiculo()
    {
        // Asume que tu vista se encuentra en resources/views/components/vehiculo/mantenimiento-vehiculo.blade.php
        return view('components.vehiculo.mantenimiento-vehiculo');
    }
}
