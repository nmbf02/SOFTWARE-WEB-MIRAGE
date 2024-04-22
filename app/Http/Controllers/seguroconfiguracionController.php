<?php

namespace App\Http\Controllers;


use App\Models\Seguro;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;


class seguroconfiguracionController extends Controller
{

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'tiposeguro' => 'required|exists:tiposeguro,IdTipoSeguro',
            'companiaseguro' => 'required|exists:companiaseguro,IdCompaniaSeguro',
            'numeropoliza' => 'required|string',
            'fechainicio' => 'required|date',
            'fechavencimiento' => 'required|date',
            'coberturaseguro' => 'required|exists:coberturaseguro,IdCoberturaSeguro',
            'estadopoliza' => 'required|exists:estadopoliza,IdEstadoPoliza',
            'condicionseguro' => 'required|exists:condicionseguro,IdCondicionSeguro',
            'telefono' => 'required|string',
            'email' => 'required|string|email',
            'status' => 'nullable|boolean',
        ]);

        $configuracionseguro = new Seguro();

        // Assign the request data to the provinciageneral instance
        $configuracionseguro->IdTipoSeguro = $request->tiposeguro;
        $configuracionseguro->IdCompaniaSeguro = $request->companiaseguro;
        $configuracionseguro->NumeroPoliza = $request->numeropoliza;
        $configuracionseguro->FechaInicio = $request->fechainicio;
        $configuracionseguro->FechaVencimiento = $request->fechavencimiento;
        $configuracionseguro->IdCoberturaSeguro = $request->coberturaseguro;
        $configuracionseguro->IdEstadoPoliza = $request->estadopoliza;
        $configuracionseguro->IdCondicionSeguro = $request->condicionseguro;
        $configuracionseguro->TelefonoContacto = $request->telefono;
        $configuracionseguro->EmailContacto = $request->email;
        $configuracionseguro->Status = $request->status ? 1 : 0;
        // dd($aseguadora->all());
        // Save the provinciageneral instance to the database
        $configuracionseguro->save();

        return redirect('general-configuration')->with('success', 'Guardado con exito');
    }
}
