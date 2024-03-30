<?php

namespace App\Http\Controllers;

class consultarFacturaController extends Controller
{
    /**
     * Muestra la página de consulta de factura.
     *
     * @param string|null $numerofactura Número de la factura opcional
     * @return \Illuminate\Http\Response
     */
    public function consultarFactura($numerofactura = null)
    {
        return view('components.venta.consultar-factura', compact('numerofactura'));
    }
}