<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class abonoPrestamosVehiculoController extends Controller
{
    /**
     * Maneja la visualización de la página para registrar o editar una cotización o factura.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string|null  $abonarprestamo El número del abono.
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function abonarPrestamo($abonarprestamo = null)
    {
        return view('components.prestamos.abono-prestamos-vehiculo', compact('abonarprestamo'));
    }
}
