<?php

namespace App\Http\Controllers;

class retroalimentacionEmpleadoController extends Controller
{
    /**
     * Muestra la página de retroalimentacion de empleado.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string|null  $documentoempleado  El ID de la retroalimentacion del empleado, opcional.
     * @return \Illuminate\Http\Response
     */
    public function documentoEmpleado($documentoempleado = null)
    {
        return view('components.reporte-analisis.retroalimentacion-empleado', compact('documentoempleado'));
    }
}