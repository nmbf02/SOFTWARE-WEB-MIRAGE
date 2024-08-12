<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class RegistrarServicioMantenimientoController extends Controller
{
    public function store(Request $request)
    {
        try {
            // Validar los datos de entrada
            $validated = $request->validate([
                'tipoMantenimiento' => 'required|exists:TipoMantenimiento,IdTipoMantenimiento',
                'kilomentrajeInicial' => 'nullable|numeric',
                'kilomentrajeFinal' => 'nullable|numeric',
                'fechaInicial' => 'nullable|numeric',
                'fechaFinal' => 'nullable|numeric',
                'nota' => 'nullable|string',
                'estado' => 'nullable|boolean',
                'tipoMotor' => 'required|array',
                'tipoMotor.*' => 'exists:Motor,IdMotor', // Validar que cada motor existe
            ]);

            // Crear un nuevo servicio
            $servicioNuevo = new Servicio();
            $servicioNuevo->IdTipoMantenimiento = $request->tipoMantenimiento;
            $servicioNuevo->KilometrajeInicial = $request->kilomentrajeInicial;
            $servicioNuevo->KilometrajeFinal = $request->kilomentrajeFinal;
            $servicioNuevo->DesdeFecha = $request->fechaInicial;
            $servicioNuevo->HastaFecha = $request->fechaFinal;
            $servicioNuevo->Notas = $request->nota;
            $servicioNuevo->Status = $request->estado ? 1 : 0;

            // Guardar el servicio
            $servicioNuevo->save();

            // Sincronizar la relación muchos a muchos con los motores seleccionados
            $servicioNuevo->motores()->sync($request->tipoMotor);

            // Redirigir con un mensaje de éxito
            return redirect('services-maintenance')->with('success', 'Guardado con exito');
//            return view('components.servicio.mantenimiento-servicio') ->with('success', 'Empleado guardado con éxito.');
        } catch (\Exception $e) {
            // En caso de error, mostrar detalles del error
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}

//namespace App\Http\Controllers;
//
//use App\Models\Servicio;
//use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Redirect;
//
//class RegistrarServicioMantenimientoController extends Controller
//{
//    public function store(Request $request)
//    {
//        try {
//            $validated = $request->validate([
//                'tipoMantenimiento' => 'required|exists:TipoMantenimiento,IdTipoMantenimiento',
//                'kilomentrajeInicial' =>'numeric',
//                'kilomentrajeFinal' => 'numeric',
//                'fechaInicial' => 'numeric',
//                'fechaFinal' => 'numeric',
//                'nota' => 'string',
//                'estado' => 'nullable|boolean',
//            ]);
//            $servicioNuevo = new Servicio();
//            $servicioNuevo->IdTipoMantenimiento  = $request->tipoMantenimiento;
//            $servicioNuevo->KilometrajeInicial = $request->kilomentrajeInicial;
//            $servicioNuevo->KilometrajeFinal = $request->kilomentrajeFinal;
//            $servicioNuevo->DesdeFecha = $request->fechaInicial;
//            $servicioNuevo->HastaFecha = $request->fechaFinal;
//            $servicioNuevo->Notas = $request->nota;
//            $servicioNuevo->Status =  $request->Estado ? 1 : 0;
//
//
//            $servicioNuevo->save();
//
//            return view('components.servicio.mantenimiento-servicio') ->with('success', 'Empleado guardado con éxito.');
//        } catch (\Exception $e) {
//            dd($request->all(), $e->getMessage());
//        }
//    }
//}
