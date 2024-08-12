<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use App\Models\Aceite;
use Illuminate\Http\Request;

class ServicioAceiteController extends Controller
{
    public function index(Request $request)
    {
        // Inicializar la variable para almacenar el Aceite seleccionado
        $typeAceite = new Aceite();

        // Si se ha enviado un `IdAceite`, buscar el registro en `Aceite`
        if (isset($request->IdAceite)) {
            $typeAceite = Aceite::findOrFail($request->IdAceite);
        }

        // Obtener todos los registros de Aceite y Servicio
        $tipoAceites = Aceite::all();
        $servicios = Servicio::with('tipoAceite')->get(); // Cargar la relación tipoAceite

        // Retornar la vista con las variables adecuadas
        return view('components.servicio.mantenimiento-aceite', [
            'typeAceite' => $typeAceite,
            'tipoAceites' => $tipoAceites, // Todos los registros de Aceite
            'servicios' => $servicios, // Todos los registros de Servicio con su relación
            'requestTipoAceite' => $request->IdAceite
        ]);
    }
}
