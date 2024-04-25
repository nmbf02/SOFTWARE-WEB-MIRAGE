<?php

namespace App\Http\Controllers;

use App\Models\Moneda;
use App\Models\Cliente;
use App\Models\Vehiculo;

use Illuminate\Http\Request;

class SalesRegisterController extends Controller
{
    public function index(Request $request)
    {
        // dd($request->all());
        $client = new Cliente();
        $vehicle = new Vehiculo();

        if(isset($request->clienteFactura)) {
            $client = Cliente::with('persona.Sector', 'categoriaLicencia')->findOrFail($request->clienteFactura);
        }
        if(isset($request->vehiculoFactura)) {
            $vehicle = Vehiculo::findOrFail($request->vehiculoFactura);
        }
        $monedafactura = Moneda::all();
        $clienteFactura = Cliente::all();
        $descripcionvehiculo = Vehiculo::all();

        
//        dd($client);

        return view('components.venta.facturar', [
            'monedafactura' => $monedafactura,
            'clienteFactura' => $clienteFactura,
            'descripcionvehiculo' => $descripcionvehiculo,
            'client' => $client,
            'vehicle' => $vehicle,
            'requestClienteFactura' => $request->clienteFactura,
            'requestVehicleFactura' => $request->vehiculoFactura
        ]);
    }
}