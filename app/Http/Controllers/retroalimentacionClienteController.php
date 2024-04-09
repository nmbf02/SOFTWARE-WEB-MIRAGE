<?php

namespace App\Http\Controllers;

class retroalimentacionClienteController extends Controller
{
    /**
     * Muestra la página de retroalimentacion de cliente .
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string|null  $documentocliente  El ID de la retroalimentacion del cliente, opcional.
     * @return \Illuminate\Http\Response
     */
    public function documentoCliente($documentocliente = null)
    {
        return view('components.reporte-analisis.retroalimentacion-cliente', compact('documentocliente'));
    }
}
