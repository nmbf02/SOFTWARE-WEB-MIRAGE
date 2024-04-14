<?php

namespace App\Http\Controllers;

class registrarPruebaConduccionController extends Controller
{
    /**
     * Muestra la página de registro de prueba de conducción

     *
     * 
     * 
     */
    public function pruebaConduccion()
    {
        return view('components.mantenimiento.prueba-conduccion');
    }
}
