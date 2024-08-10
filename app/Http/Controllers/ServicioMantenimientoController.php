<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use App\Models\TipoMantenimiento;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class ServicioMantenimientoController extends Controller
{

    public function index()
    {
        $tipoMantenimiento = TipoMantenimiento::all();
        $servicio = Servicio::all();
        return view('components.servicio.mantenimiento-servicio', [
            'tipoMantenimiento' => $tipoMantenimiento,
            'servicio' => $servicio,
        ]);
    }

    public function store(Request $request)
    {
        // Validar los datos de la solicitud
        $request->validate([
            'Descripcion' => 'required|string',
            'KilometrajeInicial' => 'required|integer',
            'KilometrajeFinal' => 'required|integer',
            'DesdeFecha' => 'required|date',
            'HastaFecha' => 'required|date',
            'Status' => 'nullable|boolean',
            'IdAceite' => 'required|integer',
            'Notas' => 'nullable|string',
        ]);

        try {
            // Crear una nueva instancia del modelo Servicio
            $servicio = new Servicio();

            // Asignar los datos de la solicitud a la instancia del modelo
            $servicio->Descripcion = $request->Descripcion;
            $servicio->KilometrajeInicial = $request->KilometrajeInicial;
            $servicio->KilometrajeFinal = $request->KilometrajeFinal;
            $servicio->DesdeFecha = $request->DesdeFecha;
            $servicio->HastaFecha = $request->HastaFecha;
            $servicio->Status = $request->Status ? 1 : 0;
            $servicio->IdAceite = $request->IdAceite;
            $servicio->Notas = $request->Notas;

            // Guardar la instancia del modelo en la base de datos
            $servicio->save();

            return redirect('registrarMantenimientoServicioController')->with('success', 'Guardado con éxito');
        } catch (QueryException $ex) {
            dd($ex);
        }
    }
}
