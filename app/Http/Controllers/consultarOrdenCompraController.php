<?php

namespace App\Http\Controllers;

class consultarOrdenCompraController extends Controller
{
    /**
     * Muestra la página de consulta de orden de compra.
     *
     * @param string|null $codigoordencompra Codigo de la orden de compra
     * @return \Illuminate\Http\Response
     */
    public function codigoOrdenCompra($codigoordencompra = null)
    {
        return view('components.cxp.consultar-orden-compra', compact('codigoordencompra'));
    }
}