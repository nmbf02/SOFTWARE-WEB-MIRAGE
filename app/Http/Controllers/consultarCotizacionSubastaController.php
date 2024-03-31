<?php

namespace App\Http\Controllers;

class consultarCotizacionSubastaController extends Controller
{
    /**
     * Muestra la página de consulta de factura.
     *
     * @param string|null $numerocotizacionsubasta Número de la factura opcional
     * @return \Illuminate\Http\Response
     */
    public function consultarCotizacionSubasta($numerocotizacionsubasta = null)
    {
        return view('components.subasta.consultar-cotizacion-subasta', compact('numerocotizacionsubasta'));
    }
}