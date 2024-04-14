<?php

namespace App\Http\Controllers;

class configuracionMantenimientoController extends Controller
{
    /**
     * Muestra la página de configurar mantenimiento
     *
     * @param string|null $configuracionmantenimiento 
     * @return \Illuminate\Http\Response
     */
    public function configuracionMantenimiento($configuracionmantenimiento = null)
    {
        return view('components.mantenimiento.configuracion-mantenimiento', compact('configuracionmantenimiento'));
    }
}