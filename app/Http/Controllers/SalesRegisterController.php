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
        $monedafactura = Moneda::all();
        $clienteFactura = Cliente::all();
        $descripcionvehiculo = Vehiculo::all();

        return view('components.venta.facturar', [
            'monedafactura' => $monedafactura,
            'clienteFactura' => $clienteFactura,
            'descripcionvehiculo' => $descripcionvehiculo

        ]);
    }
}