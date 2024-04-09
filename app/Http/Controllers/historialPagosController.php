<?php

namespace App\Http\Controllers;

class historialPagosController extends Controller
{
    /**
     * Muestra la página de historial de pagos.
     *
     * @param string|null $numeropago Número del pago
     * @return \Illuminate\Http\Response
     */
    public function historialpagos($numeropago = null)
    {
        return view('components.prestamos.historial-pagos', compact('numeropago'));
    }
}