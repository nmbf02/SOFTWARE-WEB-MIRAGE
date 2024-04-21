<?php

namespace App\Http\Controllers;


use App\Models\AseguradoraVehiculo;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;


class AseguradoraController extends Controller
{

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'nombreaseguradora' => 'required|string',
            'calleaseguradora' => 'required|string',
            'edificioaseguradora' => 'required|string',
            'sectoraseguradora'=> 'required|exists:sector,IdSector',
            'telefonoaseguradora' => 'required|string',
            'emailaseguradora' => 'required|string|email',
            'status' => 'nullable|boolean',
        ]);

        $aseguadora = new AseguradoraVehiculo();

        // Assign the request data to the provinciageneral instance
        $aseguadora->Nombre = $request->nombreaseguradora;
        $aseguadora->IdSector = $request->sectoraseguradora;
        $aseguadora->Calle = $request->calleaseguradora;
        $aseguadora->NumeroEdificio = $request->edificioaseguradora;
        $aseguadora->Telefono = $request->telefonoaseguradora;
        $aseguadora->Email = $request->emailaseguradora;
        $aseguadora->Status = $request->status ? 1 : 0;
        // dd($aseguadora->all());
        // Save the provinciageneral instance to the database
        $aseguadora->save();

        return redirect('general-configuration')->with('success', 'Guardado con exito');
    }
}
