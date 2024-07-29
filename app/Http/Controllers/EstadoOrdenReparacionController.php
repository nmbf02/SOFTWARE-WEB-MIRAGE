<?php

namespace App\Http\Controllers;

use App\Models\EstadoOrdenReparacion;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class EstadoOrdenReparacionController extends Controller
{
    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'DescripcionOrden' => 'required|string',
            'EstadoOrden' => 'nullable|boolean',
        ]);

        $OrdenReparacion = new EstadoOrdenReparacion();

        // Assign the request data to the provinciageneral instance
        $OrdenReparacion->Descripcion = $request->DescripcionOrden;
        $OrdenReparacion->Status = $request->EstadoOrden ? 1 : 0;

        // Save the provinciageneral instance to the database
        $OrdenReparacion->save();

        return redirect('configuration-mantenimiento')->with('success', 'Guardado con exito');
    }
}
