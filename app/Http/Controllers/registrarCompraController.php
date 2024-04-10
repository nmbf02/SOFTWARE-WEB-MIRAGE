<?php

namespace App\Http\Controllers;

class registrarCompraController extends Controller
{
    /**
     * Muestra la página de registrar compra
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string|null  $numeroompra  
     * @return \Illuminate\Http\Response
     */
    public function registrarCompra($numerocompra = null)
    {
        return view('components.cxp.registrar-compra', compact('numerocompra'));
    }
}