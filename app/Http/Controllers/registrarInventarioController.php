<?php

namespace App\Http\Controllers;

class registrarInventarioController extends Controller
{
    /**
     * Muestra la página de registro de inventario
     *
     * @param string|null $vehiculo 
     * @return \Illuminate\Http\Response
     */
    public function registrarInventario($vehiculo = null)
    {
        return view('components.inventario.registrar-inventario', compact('vehiculo'));
    }
}