<?php

namespace App\Http\Controllers;


use App\Models\Empresa;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;


class EmpresaController extends Controller
{

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'RUC' => 'required|string',
            'nombreempresa' => 'required|string',
            'abreviaturaempresa' => 'required|string',
            'calleempresa' => 'required|string',
            'edificioempresa' => 'required|string',
            'sectorempresa' => 'required|exists:sector,IdSector',
            'telefonoempresa' => 'required|string',
            'emailempresa' => 'required|email',
            'status' => 'nullable|boolean',
        ]);

        $empresa = new Empresa();

        // Assign the request data to the provinciageneral instance
        $empresa->RUC = $request->RUC;
        $empresa->Nombre = $request->nombreempresa;
        $empresa->AbreviaturaNombre = $request->abreviaturaempresa;
        $empresa->Calle = $request->calleempresa;
        $empresa->NumeroEdificio = $request->edificioempresa;
        $empresa->IdSector = $request->sectorempresa;
        $empresa->Telefono = $request->telefonoempresa;
        $empresa->Email = $request->emailempresa;
        $empresa->Status = $request->status ? 1 : 0;

        // Save the provinciageneral instance to the database
        $empresa->save();

        return redirect('general-configuration')->with('success', 'Guardado con exito');
    }
}
