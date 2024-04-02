<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class registrarCotizacionRentaController extends Controller
{
    /**
     * Muestra la vista de cotización de renta.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('components.renta.cotizacion-renta');
    }
}
