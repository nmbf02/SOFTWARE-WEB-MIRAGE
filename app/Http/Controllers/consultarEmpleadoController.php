<?php

namespace App\Http\Controllers;

use App\Models\Empleado;

class consultarEmpleadoController extends Controller
{
    /**
     * Muestra la página de consulta de empleado.
     *
     * @param string|null $datoempleado Cualquier dato del empleado
     * @return \Illuminate\Http\Response
     */
    public function consultarEmpleado($empleados = null)
    {
        $empleados = Empleado::with('persona', 'tipoempleado')->paginate(10);
        return view('components.nomina.consultar-empleado', compact('empleados'));
    }
}