<?php

namespace App\Http\Controllers;

class configurarNominaController extends Controller
{
    /**
     * Muestra la página de configuracion de nomina
     *
     * @param string|null $configurarnomina 
     * @return \Illuminate\Http\Response
     */
    public function configurarNomina($configurarnomina = null)
    {
        return view('components.nomina.configurar-nomina', compact('configurarnomina'));
    }
}