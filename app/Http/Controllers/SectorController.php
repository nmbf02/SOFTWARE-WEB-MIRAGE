<?php

namespace App\Http\Controllers;


use App\Models\Sector;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;


class SectorController extends Controller
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
            'provinciasectorconfigracion' => 'required|exists:provincia,IdProvincia',
            'status' => 'nullable|boolean',
        ]);

        $sector = new Sector();

        // Assign the request data to the provinciageneral instance
        $sector->Descripcion = $request->descripcion;
        $sector->IdProvincia = $request->provinciasectorconfigracion;
        $sector->Status = $request->status ? 1 : 0;

        // Save the provinciageneral instance to the database
        $sector->save();

        return redirect('general-configuration')->with('success', 'Guardado con exito');
    }
}
