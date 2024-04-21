<?php

namespace App\Http\Controllers;

use App\Models\Provincia;
use Illuminate\Http\Request;

class ProvinciaController extends Controller
{
    
    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'paisConfiguracion' => 'required|exists:pais,IdPais',
            'descripcion' => 'required|string',
            'status' => 'nullable|boolean',
        ]);

        $provinciageneral = new Provincia();

        // Assign the request data to the provinciageneral instance
        $provinciageneral->Descripcion = $request->descripcion;
        $provinciageneral->IdPais = $request->paisConfiguracion;
        $provinciageneral->Status = $request->status ? 1 : 0;
        // dd($provinciageneral->all());
        // Save the provinciageneral instance to the database
        $provinciageneral->save();

        return redirect('general-configuration')->with('success', 'Guardado con exito');
    }
}