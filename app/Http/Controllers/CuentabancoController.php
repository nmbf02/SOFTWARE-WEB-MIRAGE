<?php

namespace App\Http\Controllers;


use App\Models\Cuentabanco;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;


class CuentabancoController extends Controller
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
            'numerocuenta' => 'required|string',
            'bancocuenta' => 'required|exists:banco,IdBanco',
            'tipocuenta' => 'required|string',
            'monedacuenta'=> 'required|exists:moneda,IdMoneda',
            'fechaapertura' => 'required|date',
            'status' => 'nullable|boolean',
        ]);

        $cuenta = new Cuentabanco();

        // Assign the request data to the provinciageneral instance
        $cuenta->Descripcion = $request->descripcion;
        $cuenta->NumeroCuenta = $request->numerocuenta;
        $cuenta->IdBanco = $request->bancocuenta;
        $cuenta->Tipo = $request->tipocuenta;
        $cuenta->IdMoneda = $request->monedacuenta;
        $cuenta->FechaApertura = $request->fechaapertura;
        $cuenta->Status = $request->status ? 1 : 0;
        // dd($aseguadora->all());
        // Save the provinciageneral instance to the database
        $cuenta->save();

        return redirect('general-configuration')->with('success', 'Guardado con exito');
    }
}
