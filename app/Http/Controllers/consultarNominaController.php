<?php

namespace App\Http\Controllers;

class consultarNominaController extends Controller
{
    /**
     * Muestra la página de consulta de subasta.
     *
     * @param string|null $numeronomina Número de la subasta opcional
     * @return \Illuminate\Http\Response
     */
    public function consultarNomina($numeronomina = null)
    {
        return view('components.nomina.consultar-nomina', compact('numeronomina'));
    }
}