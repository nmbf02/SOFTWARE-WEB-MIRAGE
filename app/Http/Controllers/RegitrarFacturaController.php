<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use App\Models\DetalleVenta;
use Illuminate\Http\Request;

class RegitrarFacturaController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'clienteFactura' => 'required|exists:clientes,IdCliente',
            'subtotalfactura' => 'required|numeric',
            'descuentofactura' => 'required|numeric',
            'itbisfactura' => 'required|numeric',
            'montoapagar' => 'required|numeric',
            'monedafactura' => 'required|exists:moneda,IdMoneda',
            // Detalle de factura
            'descripcionvehiculo' => 'required|exists:vehiculos,IdVehiculo',
            'cantidadvehiculo' => 'required|numeric',
            'preciovehiculo' => 'required|numeric',
            'subtotalvehiculo' => 'required|numeric',
            'descuentovehiculo' => 'required|numeric',
            'itbisvehiculo' => 'required|numeric',
        ]);

        $venta = new Venta();
        $venta->IdCliente = $request->clienteFactura;
        $venta->Subtotal = $request->subtotalfactura;
        $venta->Descuento = $request->descuentofactura;
        $venta->Itbis = $request->itbisfactura;
        $venta->Total = $request->montoapagar;
        $venta->IdMoneda = $request->monedafactura;
        // $venta = new Venta([
        //     'IdCliente' => $request->clienteFactura,
        //     'Subtotal' => $request->subtotalfactura,
        //     'Descuento' => $request->descuentofactura,
        //     'Itbis' => $request->itbisfactura,
        //     'Total' => $request->montoapagar,
        //     'IdMoneda' => $request->monedafactura,
        // ]);
        $venta->save();

        // foreach ($request->detalles as $detalle) {
        $venta->detalleVentas()->create([
            'IdVehiculo' => $request->descripcionvehiculo,
            'CantidadVendida' => $request->cantidadvehiculo,
            'PrecioUnitario' => $request->preciovehiculo,
            'ItbisVehiculo' => $request->itbisvehiculo,
            'Subtotal' => $request->cantidadvehiculo * $request->preciovehiculo,
            'Descuento' => $request->descuentovehiculo ?? 0
        ]);




        return redirect('sales-register')->with('success', 'Guardado con exito');
    }
}
