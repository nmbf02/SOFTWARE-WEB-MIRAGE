<?php

namespace App\Http\Controllers;

use App\Models\MotivoOrdenReparacion;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;


class MotivoOrdenReparacionController extends Controller
{

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'DescripcionMotivoReparacion' => 'required|string',
            'EstadoMotivoReparacion' => 'nullable|boolean',
        ]);

        $OrdenFrecuencia = new MotivoOrdenReparacion();

        // Assign the request data to the provinciageneral instance
        $OrdenFrecuencia->Descripcion = $request->DescripcionMotivoReparacion;
        $OrdenFrecuencia->Status = $request->EstadoMotivoReparacion ? 1 : 0;

        // Save the provinciageneral instance to the database
        $OrdenFrecuencia->save();

        return redirect('configuration-mantenimiento')->with('success', 'Guardado con exito');
    }
}