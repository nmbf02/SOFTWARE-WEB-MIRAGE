<?php

namespace App\Http\Controllers;

class configuracionCXPController extends Controller
{
    /**
     * Muestra la página de configuracion de vehículo
     *
     * @param string|null $configuracioncxp
     * @return \Illuminate\Http\Response
     */
    public function configuracionCXP($configuracioncxp = null)
    {
        return view('components.cxp.configuracion-cxp', compact('configuracioncxp'));
    }
}