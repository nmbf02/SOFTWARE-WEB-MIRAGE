<?php

namespace App\Http\Controllers;

use App\Models\Aceite;
use Illuminate\Http\Request;
use App\Models\EdadVehicular;

class EdadvehiculoController extends Controller
{
// Crear un nuevo registro
    public function store(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'descripcion' => 'required|string',
            'periodoUno' => 'nullable|integer',
            'periodoDos' => 'nullable|integer',
            'status' => 'boolean'
        ]);

        $edadVehicular = new EdadVehicular();
        $edadVehicular->Descripcion = $request->descripcion;
        $edadVehicular->PeriodoUno = $request->periodoUno;
        $edadVehicular->PeriodoDos = $request->periodoDos;
        $edadVehicular->Status = $request->status ? 1 : 0;
        $edadVehicular->save();

        return redirect('vehicle-configuration')->with('success', 'Guardado con exito');
    }

}
