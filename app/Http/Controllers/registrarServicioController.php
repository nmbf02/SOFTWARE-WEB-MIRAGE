<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registrarServicioController extends Controller
{
    /**
     * @param  Request  $request
     * @param  string|null  $servicio
     * @return \Illuminate\View\View
     */
    public function registrarVehiculo(Request $request, $servicio = null)
    {
        return view('components.servicio.registrar-servicio', compact('servicio'));
    }
}

