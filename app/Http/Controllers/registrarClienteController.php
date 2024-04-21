<?php

namespace App\Http\Controllers;

class registrarClienteController extends Controller
{
    /**
     * Muestra la página de registrar clientes
     *
     * 
     * 
     */
    public function registroCliente()
    {
        return view('components.cxc.registro-cliente');
    }
}
