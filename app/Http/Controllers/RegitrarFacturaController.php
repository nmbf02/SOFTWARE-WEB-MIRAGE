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
            // dd($request->all());
            $validated = $request->validate([
               
                // 'clienteFactura' => 'required|exists:clientes,IdCliente',
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
            // dd($request->all());
            // echo 'x1';
            $ventaNueva = new Venta();
            $ventaNueva->IdCliente = $request->clienteFactura;
            $ventaNueva->Subtotal = $request->subtotalfactura;
            $ventaNueva->Descuento = $request->descuentofactura;
            $ventaNueva->Itbis = $request->itbisfactura;
            $ventaNueva->Total = $request->montoapagar;
            $ventaNueva->IdMoneda = $request->monedafactura;
            // $ventaNueva = new Venta([
            //     'IdCliente' => $request->clienteFactura,
            //     'Subtotal' => $request->subtotalfactura,
            //     'Descuento' => $request->descuentofactura,
            //     'Itbis' => $request->itbisfactura,
            //     'Total' => $request->montoapagar,
            //     'IdMoneda' => $request->monedafactura,
            // ]);

            $ventaNueva->save();

            // // foreach ($request->detalles as $detalle) {
            $ventaNueva->detalleVentas()->create([
                'IdVehiculo' => $request->idvehiculo,
                'CantidadVendida' => $request->cantidadvehiculo,
                'PrecioUnitario' => $request->preciovehiculo,
                'ItbisVehiculo' => $request->itbisvehiculo,
                'Subtotal' => $request->cantidadvehiculo * $request->preciovehiculo,
                'Descuento' => $request->descuentovehiculo ?? 0
            ]);

            $ventaNueva->save();

            // dd($ventaNueva);
            return Redirect::away('/DescargarFactura/' . $ventaNueva->IdVenta);
        } catch (\Exception $e) {
            // Handle the exception here
            dd($request->all(), $e->getMessage());
        }
    }
}
