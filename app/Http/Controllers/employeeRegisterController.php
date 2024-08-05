<?php

namespace App\Http\Controllers;

// Colocar tablas que estan asociadas para relacion

// Solo se usa para editar el empleado - use App\Models\Empleado;
use App\Models\TipoEmpleado;
use Illuminate\Http\Request;

class employeeRegisterController extends Controller
{
    public function index(Request $request)
    {
        // dd($request->all());
        $tipoEmpleado = TipoEmpleado::all();

        return view('components.nomina.registrar-empleado', [
            'tipoEmpleado' => $tipoEmpleado
        ]);
    }
}