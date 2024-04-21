<?php

namespace App\Http\Controllers;

use App\Models\Ubicacion;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class UbicacionController extends Controller
{

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'descripcion' => 'required|string',
            'Almacenvehiculo'=> 'required|exists:almacen,IdAlmacen',
            'status' => 'nullable|boolean',
        ]);

        $aseguadora = new Ubicacion();

        // Assign the request data to the provinciageneral instance
        $aseguadora->Descripcion = $request->descripcion;
        $aseguadora->IdAlmacen = $request->Almacenvehiculo;
        $aseguadora->Status = $request->status ? 1 : 0;
        // dd($aseguadora->all());
        // Save the provinciageneral instance to the database
        $aseguadora->save();

        return redirect('vehicle-configuration')->with('success', 'Guardado con exito');
    }
}
