<?php

namespace App\Http\Controllers;

class consultarcotizacionRentaController extends Controller
{
    /**
     * Muestra la página de consulta de cotizacion.
     *
     * @param string|null $numerocotizacion Número de la cotizacion opcional
     * @return \Illuminate\Http\Response
     */
    public function consultarcotizacionRenta($numerocotizacionRenta = null)
    {
        return view('components.venta.consultar-renta-cotizacion', compact('numerocotizacionRenta'));
    }
}