<?php

namespace App\Http\Controllers;

class consultarRentaController extends Controller
{
    /**
     * Muestra la página de consulta de subasta.
     *
     * @param string|null $numerorenta Número de la subasta opcional
     * @return \Illuminate\Http\Response
     */
    public function consultarRenta($numerorenta = null)
    {
        return view('components.renta.consultar-renta', compact('numerorenta'));
    }
}