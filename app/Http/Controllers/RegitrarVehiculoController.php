<?php

namespace App\Http\Controllers;


use App\Models\Vehiculo;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;


class RegitrarVehiculoController extends Controller
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
            'acabadoVehiculo' => 'required|exists:acabadocolorvehiculos,IdAcabadoColorVehiculo',
            'tipoVehiculo' => 'required|exists:tipovehiculos,IdTipoVehiculo',
            'ClasificacionVehiculo' => 'required|exists:clasificacionvehiculos,IdClasificacionVehiculo',
            'traccionVehiculo' => 'required|exists:traccionvehiculos,IdTraccionVehiculo',
            'trasnmisionVehiculo' => 'required|exists:transmisionvehiculos,IdTransmisionVehiculo',
            'finalidadVehiculo' => 'required|exists:tipovehiculoconcesionario,IdTipoVehiculoConcesionario',
            'motorcilindro' => 'required|string',
            'serie' => 'required|string',
            'ubicacioninventario' => 'required|exists:ubicacion,IdUbicacion',
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

        $crearVehiculo = new Vehiculo();

        // Assign the request data to the Vehiculo instance
        $crearVehiculo->VIN = $request->VIN;
        $crearVehiculo->Descripcion = $request->descripcion;
        $crearVehiculo->IdEstadoVehiculo = $request->estadoVehiculo;    
        $crearVehiculo->IdModeloVehiculo = $request->modeloVehiculo;
        $crearVehiculo->IdColorVehiculo = $request->colorvehiculo;
        $crearVehiculo->IdAcabadoColorVehiculo = $request->acabadoVehiculo;
        $crearVehiculo->IdTipoVehiculo = $request->tipoVehiculo;
        $crearVehiculo->IdClasificacionVehiculo = $request->ClasificacionVehiculo;
        $crearVehiculo->IdTransmisionVehiculo = $request->trasnmisionVehiculo;
        $crearVehiculo->IdTraccionVehiculo = $request->traccionVehiculo;
        $crearVehiculo->MotorCilindro = $request->motorcilindro;
        $crearVehiculo->IdTipoVehiculoConcesionario = $request->finalidadVehiculo;
        $crearVehiculo->Serie = $request->serie;
        $crearVehiculo->IdUbicacion = $request->ubicacioninventario;  
        $crearVehiculo->AnoVehiculo = $request->anoVehiculo;
        $crearVehiculo->Precio = $request->precio;
        $crearVehiculo->IdSeguroVehiculo = $request->SeguroVehiculo;
        $crearVehiculo->Placa = $request->numeroplaca;
        $crearVehiculo->PlacaExhibicion = $request->placaexhibicion;
        $crearVehiculo->Chasis = $request->chasis;
        $crearVehiculo->Matricula = $request->matricula;
        $crearVehiculo->Marbete = $request->marbete;
        $crearVehiculo->CapacidadPasajeros = $request->capacidadpasajeros;
        $crearVehiculo->FechaExpedicion = $request->fechaexpedicion;
        $crearVehiculo->IdSegmentoMercado = $request->SegmentoMercado;
        $crearVehiculo->IdTipoItbis = $request->TipoItbis;
        $crearVehiculo->IdGarantia = $request->garantiaVehiculo;
        $crearVehiculo->Status = $request->status ? 1 : 0;

        // Save the Vehiculo instance to the database
        $crearVehiculo->save();

        return redirect('vehicle-register')->with('success', 'Guardado con exito');
    }
}
