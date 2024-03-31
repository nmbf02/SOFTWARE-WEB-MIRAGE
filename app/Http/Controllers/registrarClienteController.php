<?php

namespace App\Http\Controllers;

class registrarClienteController extends Controller
{
    /**
     * Muestra la página de consulta de subasta.
     *
     * 
     * 
     */
    public function registroCliente()
    {
        return view('components.cxc.registro-cliente');
    }
}