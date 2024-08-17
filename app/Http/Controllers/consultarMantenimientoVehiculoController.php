<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use App\Models\Cliente;

class consultarMantenimientoVehiculoController extends Controller
{
    /**
     * Muestra la página de consulta de mantenimiento de vehiculo
     *
     * @param string|null Numero del mantenimiento del vehiculo
     * @return \Illuminate\Http\Response
     */
    public function consultarMantenimientoVehiculo($mantenimiento = null)
    {
        // $mantenimiento = Venta::with('cliente.persona')->get();

        return view('components.mantenimiento.consultar-mantenimiento-vehiculo');
    }
}
