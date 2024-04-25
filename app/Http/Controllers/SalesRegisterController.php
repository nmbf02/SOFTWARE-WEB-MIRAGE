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

        if(isset($request->clienteFactura)) {
            $client = Cliente::with('persona.Sector', 'categoriaLicencia')->findOrFail($request->clienteFactura);
        }
        $monedafactura = Moneda::all();
        $clienteFactura = Cliente::all();
        $descripcionvehiculo = Vehiculo::all();
        
        //dd($client);

        return view('components.venta.facturar', [
            'monedafactura' => $monedafactura,
            'clienteFactura' => $clienteFactura,
            'descripcionvehiculo' => $descripcionvehiculo,
            'client' => $client,
            'requestClienteFactura' => $request->clienteFactura
        ]);
    }
}