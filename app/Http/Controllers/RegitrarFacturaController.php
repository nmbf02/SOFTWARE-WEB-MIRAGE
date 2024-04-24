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

        $venta = new Venta([
            'IdCliente' => $request->clienteFactura,
            'Subtotal' => $request->subtotalfactura,
            'Descuento' => $request->descuentofactura,
            'Itbis' => $request->itbisfactura,
            'Total' => $request->montoapagar,
            'IdMoneda' => $request->monedafactura,
        ]);
        $venta->save();

        foreach ($request->detalles as $detalle) {
            $venta->detalleVentas()->create([
                'IdVehiculo' => $detalle['descripcionvehiculo'],
                'CantidadVendida' => $detalle['cantidadvehiculo'],
                'PrecioUnitario' => $detalle['preciovehiculo'],
                'ItbisVehiculo' => $detalle['itbisvehiculo'],
                'Subtotal' => $detalle['cantidadvehiculo'] * $detalle['preciovehiculo'],
                'Descuento' => $detalle['descuentovehiculo'] ?? 0
            ]);
        }
        return redirect('sales-register')->with('success', 'Guardado con exito');
    }
}
