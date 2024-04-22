<?php

namespace App\Http\Controllers;


use App\Models\CoberturaSeguro;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;


class CoberturaseguroController extends Controller
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
            'limite' => 'required|numeric',
            'deducible' => 'required|numeric',
            'premiun' => 'required|numeric',
            'riesgoseguro'=> 'required|exists:tiporiesgo,IdTipoRiesgo',       
            'status' => 'nullable|boolean',
        ]);

        $coberturaseguro = new CoberturaSeguro();

        // Assign the request data to the provinciageneral instance
        $coberturaseguro->Descripcion = $request->descripcion;
        $coberturaseguro->Limite = $request->limite;
        $coberturaseguro->Deducible = $request->deducible;
        $coberturaseguro->Premium = $request->premiun;
        $coberturaseguro->IdTipoRiesgo = $request->riesgoseguro;
        $coberturaseguro->Status = $request->status ? 1 : 0;
        // dd($aseguadora->all());
        // Save the provinciageneral instance to the database
        $coberturaseguro->save();

        return redirect('general-configuration')->with('success', 'Guardado con exito');
    }
}
