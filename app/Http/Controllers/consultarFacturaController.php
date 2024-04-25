<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use App\Models\Cliente;

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
        $facturas = Venta::with('cliente.persona')->get();
        
        return view('components.venta.consultar-factura', compact('numerofactura', 'facturas'));
    }
}