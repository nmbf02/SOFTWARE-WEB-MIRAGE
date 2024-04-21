<?php

namespace App\Http\Controllers;


use App\Models\Ciudad;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;


class CiudadController extends Controller
{

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'descripcion' => 'required|string',
            'provinciaciudadconfiguracion' => 'required|exists:provincia,IdProvincia',
            'status' => 'nullable|boolean',
        ]);

        $ciudadprovinciaconfiguracion = new Ciudad();

        // Assign the request data to the provinciageneral instance
        $ciudadprovinciaconfiguracion->Descripcion = $request->descripcion;
        $ciudadprovinciaconfiguracion->IdProvincia = $request->provinciaciudadconfiguracion;
        $ciudadprovinciaconfiguracion->Status = $request->status ? 1 : 0;

        // Save the provinciageneral instance to the database
        $ciudadprovinciaconfiguracion->save();

        return redirect('general-configuration')->with('success', 'Guardado con exito');
    }
}
