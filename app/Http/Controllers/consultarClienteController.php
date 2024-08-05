<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Venta;

class consultarClienteController extends Controller
{
    /**
     * Muestra la página de consulta de subasta.
     *
     * @param string|null $datocliente Cualquier dato del cliente
     * @return \Illuminate\Http\Response
     */
    public function consultarCliente()
    {    
        $clientes = Cliente::with('persona', 'categoriaLicencia', 'tipoPersona', 'condicionFactura')->paginate(10);

        return view('components.cxc.consultar-cliente', compact('clientes'));
    }
}