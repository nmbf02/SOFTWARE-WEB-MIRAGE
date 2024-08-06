<?php

namespace App\Http\Controllers;

use App\Models\TipoMantenimiento;
use Illuminate\Http\Request;

class TipoMantenimientoController extends Controller
{
    
    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'FrecuenciaConfig' => 'required|exists:frecuenciamantenimiento,IdFrecuenciaMantenimiento',
            'DescripcionMantenimiento' => 'required|string',
            'EstadoTipoMantenimiento' => 'nullable|boolean',
        ]);

        $TipoMantenimiento = new TipoMantenimiento();

        // Assign the request data to the provinciageneral instance
        $TipoMantenimiento->Descripcion = $request->DescripcionMantenimiento;
        $TipoMantenimiento->IdFrecuenciaMantenimiento = $request->paisConfiguracion;
        $TipoMantenimiento->Status = $request->EstadoTipoMantenimiento ? 1 : 0;
        // dd($provinciageneral->all());
        // Save the provinciageneral instance to the database
        $TipoMantenimiento->save();

        return redirect('general-configuration')->with('success', 'Guardado con exito');
    }
}