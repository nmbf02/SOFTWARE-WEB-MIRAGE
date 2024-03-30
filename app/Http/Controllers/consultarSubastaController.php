<?php

namespace App\Http\Controllers;

class consultarSubastaController extends Controller
{
    /**
     * Muestra la página de consulta de subasta.
     *
     * @param string|null $numerosubasta Número de la subasta opcional
     * @return \Illuminate\Http\Response
     */
    public function consultarSubasta($numerosubasta = null)
    {
        return view('components.subasta.consultar-subasta', compact('numerosubasta'));
    }
}