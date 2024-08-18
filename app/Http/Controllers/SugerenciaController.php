<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use App\Models\Motor;
use App\Models\Aceite;
use App\Models\Mantenimiento;
use Illuminate\Http\Request;

class SugerenciaController extends Controller
{
    public function index(Request $request)
    {
        $tipoMotor = Motor::all();
        $typeMotor = null;
        $aceites = [];
        $mantenimientos = [];
        $kilometraje = $request->kilometraje;

        if ($request->has('tipoMotor') && $request->tipoMotor != 0) {
            $typeMotor = Motor::find($request->tipoMotor);

            if ($typeMotor) {
                $aceites = $typeMotor->aceites;

                if ($request->has('kilometraje') && $kilometraje != '') {
                    $aceiteRecomendado = $aceites->filter(function($aceite) use ($kilometraje) {
                        return $kilometraje >= $aceite->Kilometraje;
                    })->first();

                    if ($aceiteRecomendado) {
                        $mantenimientos = Mantenimiento::where('IdMotor', $typeMotor->IdMotor)
                                ->where('KilometrajeRecomendado', '<=', $kilometraje)
                                ->get();
                    }
                }
            }
        }

        return view('components.mantenimiento.sugerencia-mantenimiento', [
            'tipoMotor' => $tipoMotor,
            'typeMotor' => $typeMotor,
            'aceites' => $aceites,
            'mantenimientos' => $mantenimientos,
            'requestTipoMotor' => $request->tipoMotor,
            'selectedAceite' => $request->aceite ?? null,
            'kilometraje' => $kilometraje,
        ]);
    }
}
