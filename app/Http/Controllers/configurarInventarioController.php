<?php

namespace App\Http\Controllers;

class configurarInventarioController extends Controller
{
    /**
     * Muestra la página de configurar inventario
     *
     * @param string|null $vehiculo 
     * @return \Illuminate\Http\Response
     */
    public function configurarInventario($vehiculo = null)
    {
        return view('components.inventario.configurar-inventario', compact('vehiculo'));
    }
}