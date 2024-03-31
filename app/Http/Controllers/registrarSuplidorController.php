<?php

namespace App\Http\Controllers;

class registrarSuplidorController extends Controller
{
    /**
     * Muestra la página de consulta de subasta.
     *
     * 
     * 
     */
    public function registroSuplidor()
    {
        return view('components.cxp.registro-suplidor');
    }
}