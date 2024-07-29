<?php

namespace App\Http\Controllers;

use App\Models\EstadoSolicitudCita;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class EstadoSolicitudCitaController extends Controller
{
    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'descripcionEstado' => 'required|string',
            'Estado' => 'nullable|boolean',
        ]);

        $solicitud = new EstadoSolicitudCita();

        // Assign the request data to the provinciageneral instance
        $solicitud->Descripcion = $request->descripcionEstado;
        $solicitud->Status = $request->status ? 1 : 0;

        // Save the provinciageneral instance to the database
        $solicitud->save();

        return redirect('configuration-mantenimiento')->with('success', 'Guardado con exito');
    }
}
