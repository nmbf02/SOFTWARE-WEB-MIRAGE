<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class RegistrarServicioMantenimientoController extends Controller
{
    public function store(Request $request)
    {
//        dd($request->all());
        $validated = $request->validate([
            'tipoMotor' => 'required|exists:Motor,IdMotor',
            'tipoMantenimiento' => 'required|exists:TipoMantenimiento,IdTipoMantenimiento',
            'kilomentrajeInicial' => 'nullable|numeric',
            'kilomentrajeFinal' => 'nullable|numeric',
            'fechaInicial' => 'nullable|numeric',
            'fechaFinal' => 'nullable|numeric',
            'nota' => 'nullable|string',
            'status' => 'nullable|boolean',
        ]);


        // Crear un nuevo servicio
        $servicioNuevo = new Servicio();
        $servicioNuevo->IdMotor = $request->tipoMotor;
        $servicioNuevo->IdTipoMantenimiento = $request->tipoMantenimiento;
        $servicioNuevo->KilometrajeInicial = $request->kilomentrajeInicial;
        $servicioNuevo->KilometrajeFinal = $request->kilomentrajeFinal;
        $servicioNuevo->DesdeFecha = $request->fechaInicial;
        $servicioNuevo->HastaFecha = $request->fechaFinal;
        $servicioNuevo->Notas = $request->nota;
        $servicioNuevo->Status = $request->status ? 1 : 0;
        // Guardar el servicio
        $servicioNuevo->save();


        // Redirigir con un mensaje de éxito
        return redirect('services-maintenance')->with('success', 'Guardado con exito');
    }
}

