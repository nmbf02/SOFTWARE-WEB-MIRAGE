<?php

namespace App\Http\Controllers;

class configuracionGeneralController extends Controller
{
    /**
     * Muestra la página de configuracion de vehículo
     *
     * @param string|null $configuraciongeneral 
     * @return \Illuminate\Http\Response
     */
    public function configuracionGeneral($configuraciongeneral = null)
    {
        return view('components.configuracion.configuracion-general', compact('configuraciongeneral'));
    }
}