<?php

namespace App\Http\Controllers;

class registrarRentaController extends Controller
{
    /**
     * Muestra la página de consulta de subasta.
     *
     * 
     * 
     */
    public function registroRenta()
    {
        return view('components.renta.registro-renta');
    }
}