<?php

namespace App\Http\Controllers;

use App\Models\Banco;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;


class BancoController extends Controller
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
            'sectorConfiguracion'=> 'required|exists:sector,IdSector',
            'telefono' => 'required|string',
            'email' => 'required|string|email',
            'status' => 'nullable|boolean',
        ]);

        $banco = new Banco();

        // Assign the request data to the provinciageneral instance
        $banco->Descripcion = $request->descripcion;
        $banco->IdSector = $request->sectorConfiguracion;
        $banco->Telefono = $request->telefono;
        $banco->Email = $request->email;
        $banco->Status = $request->status ? 1 : 0;
        // dd($aseguadora->all());
        // Save the provinciageneral instance to the database
        $banco->save();

        return redirect('general-configuration')->with('success', 'Guardado con exito');
    }
}
