<?php

namespace App\Http\Controllers;

class consultarCotizacionController extends Controller
{
    /**
     * Muestra la página de consulta de cotizacion.
     *
     * @param string|null $numerocotizacion Número de la cotizacion opcional
     * @return \Illuminate\Http\Response
     */
    public function consultarCotizacion($numerocotizacion = null)
    {
        return view('components.venta.consultar-cotizacion-factura', compact('numerocotizacion'));
    }
}