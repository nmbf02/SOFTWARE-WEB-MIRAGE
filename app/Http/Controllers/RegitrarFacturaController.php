<?php

namespace App\Http\Controllers;


use App\Models\Venta;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;


class RegitrarFacturaController extends Controller
{

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'VIN' => 'required|string',
            'descripcion' => 'required|string',
            'estadoVehiculo' => 'required|exists:estadovehiculos,IdEstadoVehiculo',
            'modeloVehiculo' => 'required|exists:modelovehiculos,IdModeloVehiculo',
            'colorvehiculo' => 'required|exists:colorvehiculos,IdColorVehiculo',
            // 'acabadoVehiculo' => 'required|exists:acabadocolorvehiculos,IdAcabadoColorVehiculo',
            'tipoVehiculo' => 'required|exists:tipovehiculos,IdTipoVehiculo',
            'ClasificacionVehiculo' => 'required|exists:clasificacionvehiculos,IdClasificacionVehiculo',
            'traccionVehiculo' => 'required|exists:traccionvehiculos,IdTraccionVehiculo',
            'trasnmisionVehiculo' => 'required|exists:transmisionvehiculos,IdTransmisionVehiculo',
            'finalidadVehiculo' => 'required|exists:tipovehiculoconcesionario,IdTipoVehiculoConcesionario',
            'motorcilindro' => 'required|string',
            'serie' => 'required|string',
            'ubicacionInventario' => 'required|exists:ubicacion,IdUbicacion',
            'anoVehiculo' => 'required|integer',
            'precio' => 'required|numeric',
            'SeguroVehiculo' => 'required|exists:segurovehiculos,IdSeguroVehiculo',
            'numeroplaca' => 'required|string',
            'placaexhibicion' => 'required|string',
            'chasis' => 'required|string',
            'matricula' => 'required|string',
            'marbete' => 'required|string',
            'capacidadpasajeros' => 'required|integer',
            'fechaexpedicion' => 'required|date',
            'SegmentoMercado' => 'required|exists:segmentomercado,IdSegmentoMercado',
            'TipoItbis' => 'required|exists:tipoitbis,IdTipoItbis',
            'garantiaVehiculo' => 'required|exists:garantia,IdGarantia',
            'status' => 'nullable|boolean',
        ]);

        $registrarVenta = new Venta();

        $registrarVenta->Descripcion = $request->descripcion;

        $registrarVenta->Status = $request->status ? 1 : 0;

        // Save the Vehiculo instance to the database
        $registrarVenta->save();

        return redirect('vehicle-register')->with('success', 'Guardado con exito');
    }
}
