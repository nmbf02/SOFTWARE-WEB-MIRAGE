<?php

namespace App\Http\Controllers;

class consultarClienteController extends Controller
{
    /**
     * Muestra la página de consulta de subasta.
     *
     * @param string|null $datocliente Cualquier dato del cliente
     * @return \Illuminate\Http\Response
     */
    public function consultarCliente($datocliente = null)
    {
        return view('components.cxc.consultar-cliente', compact('datocliente'));
    }
}