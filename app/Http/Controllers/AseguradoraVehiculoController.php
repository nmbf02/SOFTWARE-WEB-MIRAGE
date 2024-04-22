<?php

namespace App\Http\Controllers;


use App\Models\Segurovehiculo;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;


class AseguradoraVehiculoController extends Controller
{

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'numeroseguro' => 'required|string',
            'aseguradoravehiculo' => 'required|exists:aseguradoravehiculos,IdAseguradoraVehiculo',
            'fechacontrato' => 'required|date',
            'fechavencimiento' => 'required|date',
            'limiterenovacion' => 'required|date',
            'montoseguro' => 'required|numeric',
            'Monedaseguro' => 'required|exists:moneda,IdMoneda',
            'status' => 'nullable|boolean',
        ]);

        $vehiculoseguro = new Segurovehiculo();

        // Assign the request data to the provinciageneral instance
        $vehiculoseguro->NumeroSeguro = $request->numeroseguro;
        $vehiculoseguro->IdAseguradoraVehiculo = $request->aseguradoravehiculo;
        $vehiculoseguro->FechaContrato = $request->fechacontrato;
        $vehiculoseguro->FechaVencimiento = $request->fechavencimiento;
        $vehiculoseguro->LimiteRenovacion = $request->limiterenovacion;
        $vehiculoseguro->MontoCosto = $request->montoseguro;
        $vehiculoseguro->IdMoneda = $request->Monedaseguro;
        $vehiculoseguro->Status = $request->status ? 1 : 0;

        // Save the provinciageneral instance to the database
        $vehiculoseguro->save();

        return redirect('vehicle-configuration')->with('success', 'Guardado con exito');
    }
}
