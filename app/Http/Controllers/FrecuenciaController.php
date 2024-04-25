<?php

namespace App\Http\Controllers;

use App\Models\Frecuenciamantenimiento;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;


class FrecuenciaController extends Controller
{

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'DescripcionFrecuencia' => 'required|string',
            'EstadoFrecuencia' => 'nullable|boolean',
        ]);

        $frecuencia = new Frecuenciamantenimiento();

        // Assign the request data to the provinciageneral instance
        $frecuencia->Descripcion = $request->DescripcionFrecuencia;
        $frecuencia->Status = $request->EstadoFrecuencia ? 1 : 0;

        // Save the provinciageneral instance to the database
        $frecuencia->save();

        return redirect('configuration-mantenimiento')->with('success', 'Guardado con exito');
    }
}