<?php

namespace App\Http\Controllers;

class consultarInventarioController extends Controller
{
    /**
     * Muestra la página de consulta de inventario
     *
     * @param string|null $vehiculo 
     * @return \Illuminate\Http\Response
     */
    public function consultarInventario($vehiculo = null)
    {
        return view('components.inventario.consultar-inventario', compact('vehiculo'));
    }
}