<?php

namespace App\Http\Controllers;

use App\Models\Aceite;
use App\Models\Motor;
use Illuminate\Http\Request;

class AceiteMotorController extends Controller
{
    public function store(Request $request)
    {
        // Validación de datos
        $validatedData = $request->validate([
            'motorVehiculo' => 'required|exists:Motor,IdMotor', // Validación para la tabla Motor
            'tipoAceite' => 'required|array',
            'tipoAceite.*' => 'exists:Aceite,IdAceite', // Validación para la tabla Aceite
        ]);

        // Obtener el motor seleccionado
        $motor = Motor::find($validatedData['motorVehiculo']);

        // Guardar la relación en la tabla pivote `Aceite Y Motor`
        $motor->aceites()->sync($validatedData['tipoAceite'], false); // `false` asegura que no se eliminen relaciones anteriores

        // Redirigir a una página de éxito o de regreso al formulario
        return redirect('services-maintenance')->with('success', 'Guardado con exito');
    }


}
