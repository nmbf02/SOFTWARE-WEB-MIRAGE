<?php

namespace App\Http\Controllers;


use App\Models\Garantia;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;


class GarantiaController extends Controller
{

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'nombre' => 'required|string',
            'descripcion' => 'required|string',
            'fechainicio' => 'required|date',
            'fechafin' => 'required|date',
            'cobertura' => 'required|numeric',
            'deducible' => 'required|numeric',
            'primabase' => 'required|numeric',
            'duracion' => 'required|numeric',
            'garantialapsotiempo'=> 'required|exists:lapsotiempo,IdLapsoTiempo',
            'status' => 'nullable|boolean',
        ]);

        $garantia = new Garantia();

        // Assign the request data to the provinciageneral instance
        $garantia->Nombre = $request->nombre;
        $garantia->Descripcion = $request->descripcion;
        $garantia->FechaInicio = $request->fechainicio;
        $garantia->FechaFin = $request->fechafin;
        $garantia->Cobertura = $request->cobertura;
        $garantia->Deducible = $request->deducible;
        $garantia->PrimaBase = $request->primabase;
        $garantia->Duracion = $request->duracion;
        $garantia->IdLapsoTiempo = $request->garantialapsotiempo;
        $garantia->Status = $request->status ? 1 : 0;
        // dd($garantia->all());
        // Save the provinciageneral instance to the database
        $garantia->save();

        return redirect('general-configuration')->with('success', 'Guardado con exito');
    }
}
