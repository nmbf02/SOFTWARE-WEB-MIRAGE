<?php

namespace App\Http\Controllers;

use App\Models\Aceite;
use App\Models\Motor;
use Illuminate\Http\Request;

class SugerenciaController extends Controller
{
    public function index(Request $request)
    {
        // Obtener todos los motores para llenar el select
        $tipoMotor = Motor::all();

        // Verificar si se ha seleccionado un motor específico
        $typeMotor = null;
        $aceites = [];
        if ($request->has('tipoMotor') && $request->tipoMotor) {
            $typeMotor = Motor::find($request->tipoMotor);
            // Obtener los aceites asociados al motor seleccionado
            if ($typeMotor) {
                $aceites = Aceite::where('motor_id', $typeMotor->id)->get();
            }
        }

        // Devolver la vista con las variables necesarias
        return view('components.mantenimiento.sugerencia-mantenimiento', [
            'tipoMotor' => $tipoMotor,
            'typeMotor' => $typeMotor,
            'aceites' => $aceites,
            'requestTipoMotor' => $request->tipoMotor,
        ]);
    }
}
