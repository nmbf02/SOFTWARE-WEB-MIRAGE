<?php

namespace App\Http\Controllers;

class registrarOrdenReparacionController extends Controller
{
    /**
     * Muestra la página de orden de reparacion
     *
     * 
     * 
     */
    public function ordenReparacion()
    {
        return view('components.mantenimiento.orden-reparacion');
    }
}
