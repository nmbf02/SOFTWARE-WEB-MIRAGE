<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use App\Models\Mantenimiento;

use Illuminate\Http\Request;

class SeleccionMantenimientoController extends Controller
{
    public function index(Request $request)
    {
        // Inicialización de variables
        $typeSales = new Venta();
        $typeMaintenance = new Mantenimiento();

        // Venta (Factura)
        if (isset($request->factura)) {
            $typeSales = Venta::with('Clientes.Persona')->findOrFail($request->factura);
        }

        // Mantenimiento
        if (isset($request->mantenimiento)) {
            $typeMaintenance = Mantenimiento::findOrFail($request->mantenimiento);
        }

        // Consultar todas las ventas y mantenimientos
        $mantenimientoFactura = Venta::all();
        $mantenimientoMantenimiento = Mantenimiento::all();

        return view('components.mantenimiento.mantenimiento-vehiculo', [
            'typeSales' => $typeSales,
            'typeMaintenance' => $typeMaintenance,
            'mantenimientoFactura' => $mantenimientoFactura,
            'mantenimientoMantenimiento' => $mantenimientoMantenimiento,
            'requestmt' => $request->factura,
            'requestmm' => $request->mantenimiento,
        ]);
    }
}
