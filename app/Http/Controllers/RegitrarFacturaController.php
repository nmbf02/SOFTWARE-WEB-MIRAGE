<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use App\Models\DetalleVenta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class RegitrarFacturaController extends Controller
{
    public function store(Request $request)
    {
        try {
            // Validar los datos recibidos
            $validated = $request->validate([
                'subtotalfactura' => 'required|numeric',
                'descuentofactura' => 'required|numeric',
                'itbisfactura' => 'required|numeric',
                'montoapagar' => 'required|numeric',
                'monedafactura' => 'required|exists:moneda,IdMoneda',
                // Detalle de factura
                'idvehiculo' => 'required|exists:vehiculos,IdVehiculo',
                'cantidadvehiculo' => 'required|numeric',
                'preciovehiculo' => 'required|numeric',
                'subtotalvehiculo' => 'required|numeric',
                'descuentovehiculo' => 'nullable|numeric',
                'itbisvehiculo' => 'required|numeric',
            ]);

            // Crear y guardar la venta
            $ventaNueva = new Venta([
                'IdCliente' => $request->clienteFactura,
                'Subtotal' => $request->subtotalfactura,
                'Descuento' => $request->descuentofactura,
                'Itbis' => $request->itbisfactura,
                'Total' => $request->montoapagar,
                'IdMoneda' => $request->monedafactura,
            ]);

            $ventaNueva->save();

            // Crear y guardar el detalle de la venta
            $ventaNueva->detalleVentas()->create([
                'IdVehiculo' => $request->idvehiculo,
                'CantidadVendida' => $request->cantidadvehiculo,
                'PrecioUnitario' => $request->preciovehiculo,
                'ItbisVehiculo' => $request->itbisvehiculo,
                'Subtotal' => $request->cantidadvehiculo * $request->preciovehiculo,
                'Descuento' => $request->descuentovehiculo ?? 0
            ]);

            // Redirigir al usuario para descargar la factura
            return Redirect::away('/DescargarFactura/' . $ventaNueva->IdVenta);

        } catch (\Exception $e) {
            // Manejo de excepciones
            dd($request->all(), $e->getMessage());
        }
    }
}
