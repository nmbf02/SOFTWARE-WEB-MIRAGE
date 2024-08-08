<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Models\Persona;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class RegistrarEmpleadoController extends Controller
{
    /**

    @param  \Illuminate\Http\Request  $request
    @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'nombre' => 'required|string',
            'apellido' => 'required|string',
            'email' => 'required|email',
            'telefono' => 'required|string',
            'tipoEmpleado' => 'required|exists:tipoEmpleado,IdTipoEmpleado',
            'status' => 'nullable|boolean',
        ]);

        $persona = new Persona();
        $persona->Nombre = $request->nombre;
        $persona->Apellido = $request->apellido;
        $persona->Email = $request->email;
        $persona->Telefono = $request->telefono;
        // Asegúrate de asignar todos los campos fillable que necesites aquí
        $persona->save();

        $empleado = new Empleado();$empleado->IdPersona = $persona->IdPersona; // Asegúrate de que este sea el nombre correcto de la llave primaria$empleado->IdTipoEmpleado = $request->tipoEmpleado;$empleado->status = $request->status ? 1 : 0;


        $empleado->save();

        return redirect('employee-register')->with('success', 'Empleado guardado con éxito.');
    }

}
