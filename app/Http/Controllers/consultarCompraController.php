<?php

namespace App\Http\Controllers;

class consultarCompraController extends Controller
{
    /**
     * Muestra la página de consulta de compra.
     *
     * @param string|null $codigocompra Codigo de la compra
     * @return \Illuminate\Http\Response
     */
    public function codigoCompra($codigocompra = null)
    {
        return view('components.cxp.consultar-compra', compact('codigocompra'));
    }
}