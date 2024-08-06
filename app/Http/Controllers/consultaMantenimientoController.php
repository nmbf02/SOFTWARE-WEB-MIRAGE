<?php

namespace App\Http\Controllers;

class consultaMantenimientoController extends Controller
{
    /**
     * Muestra la página de consulta de mantenimiento
     *
     * @param string|null $consultamantenimiento 
     * @return \Illuminate\Http\Response
     */
    public function consultaMantenimiento($consultamantenimiento = null)
    {
        return view('components.mantenimiento.consulta-mantenimiento', compact('consultamantenimiento'));
    }
}