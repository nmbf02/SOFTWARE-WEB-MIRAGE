<?php

namespace App\Http\Controllers;

class registrarFacturaController extends Controller
{
    /**
     * Muestra la página de consulta de subasta.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string|null  $factura  El ID de la factura, opcional.
     * @return \Illuminate\Http\Response
     */
    public function registrarFactura($factura = null)
    {
        return view('components.venta.facturar', compact('factura'));
    }
}