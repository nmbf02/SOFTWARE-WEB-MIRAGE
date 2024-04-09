<?php

namespace App\Http\Controllers;

class registrarOrdenCompraController extends Controller
{
    /**
     * Muestra la página de registrar la orden de compra
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string|null  $numeroordencompra  
     * @return \Illuminate\Http\Response
     */
    public function registrarOrdenCompra($numeroordencompra = null)
    {
        return view('components.cxp.registrar-orden-compra', compact('numeroordencompra'));
    }
}