<?php

namespace App\Http\Controllers;

class registrarEmpleadoController extends Controller
{
    /**
     * Muestra la página de registrar empleado

     *
     * 
     * 
     */
    public function codigoEmpleado()
    {
        return view('components.nomina.registrar-empleado');
    }
}
