<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Asegúrate de importar cualquier otro modelo o clase necesaria aquí

class registrarCotizacionFacturaController extends Controller
{
    /**
     * Maneja la visualización de la página para registrar o editar una cotización o factura.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string|null  $numerocotizacionfactura El número de la cotización o factura, opcional.
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function registrarCotizacionFactura( $numerocotizacionfactura = null)
    {
        return view('components.venta.cotizacion-factura', compact('numerocotizacionfactura'));
    }
}
