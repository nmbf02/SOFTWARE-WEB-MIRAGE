<?php

namespace App\Http\Controllers;

class registrarSolicitudcitaController extends Controller
{
    /**
     * Muestra la página de solicitud de cita.
     *
     * 
     * 
     */
    public function solicitudCita()
    {
        return view('components.mantenimiento.solicitud-cita');
    }
}
