<?php

namespace App\Http\Controllers;


use App\Models\Companiaseguro;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;


class CompaniaseguroController extends Controller
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
            'sectorcompania'=> 'required|exists:sector,IdSector',
            'telefono' => 'required|string',
            'email' => 'required|string|email',            
            'status' => 'nullable|boolean',
        ]);

        $companiaseguro = new Companiaseguro();

        // Assign the request data to the provinciageneral instance
        $companiaseguro->Nombre = $request->nombre;
        $companiaseguro->IdSector = $request->sectorcompania;
        $companiaseguro->Telefono = $request->telefono;
        $companiaseguro->Email = $request->email;
        $companiaseguro->Status = $request->status ? 1 : 0;
        // dd($aseguadora->all());
        // Save the provinciageneral instance to the database
        $companiaseguro->save();

        return redirect('general-configuration')->with('success', 'Guardado con exito');
    }
}
