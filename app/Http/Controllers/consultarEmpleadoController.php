<?php

namespace App\Http\Controllers;

class consultarEmpleadoController extends Controller
{
    /**
     * Muestra la página de consulta de empleado.
     *
     * @param string|null $datoempleado Cualquier dato del empleado
     * @return \Illuminate\Http\Response
     */
    public function consultarEmpleado($datoempleado = null)
    {
        return view('components.nomina.consultar-empleado', compact('datoempleado'));
    }
}