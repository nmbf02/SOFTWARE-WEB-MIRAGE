<?php

namespace App\Http\Controllers;

use App\Models\ConfiguracionAceite;
use App\Models\Venta;
use App\Models\Mantenimiento;
use App\Models\Empleado;
use Illuminate\Http\Request;

class SeleccionMantenimientoController extends Controller
{
    public function index(Request $request)
    {
        // Inicialización de variables
        $typeSales = new Venta();
        $typeMaintenance = new Mantenimiento();
        $detalleVenta = null;
        $servicios = collect(); // Inicializamos $servicios como una colección vacía
        $empleado = null; // Inicializamos la variable del empleado
        $aceiteSeleccionado = null; // Inicializamos la variable del aceite seleccionado
        $kilometrajeProximo = null; // Inicializamos la variable para el kilometraje próximo
        $fechaProximoMantenimiento = null; // Inicializamos la variable para la fecha del próximo mantenimiento

        // Venta (Factura)
        if (isset($request->factura)) {
            $typeSales = Venta::with([
                'cliente.persona',
                'detalleVentas.vehiculo.motor',
                'detalleVentas.vehiculo.configuracionAceite'
            ])->findOrFail($request->factura);

            // Obtener el primer (y único) DetalleVenta
            $detalleVenta = $typeSales->detalleVentas->first();
        }

        // Mantenimiento
        if (isset($request->mantenimiento)) {
            $typeMaintenance = Mantenimiento::findOrFail($request->mantenimiento);

            if ($detalleVenta) {
                // Filtra los servicios según el kilometraje del vehículo y el mantenimiento actual
                $servicios = Servicio::where('KilometrajeInicial', '<=', $detalleVenta->vehiculo->Kilometraje)
                    ->where('KilometrajeFinal', '>=', $detalleVenta->vehiculo->Kilometraje)
                    ->get();
            }
        }

        // Empleado (Mecánico)
        if (isset($request->mecanico)) {
            $empleado = Empleado::with('persona')->findOrFail($request->mecanico);
        }

        // Aceite
        if (isset($request->aceitemant)) {
            $aceiteSeleccionado = ConfiguracionAceite::findOrFail($request->aceitemant);

            // Si tenemos un vehículo y un aceite seleccionado, calculamos el kilometraje próximo
            if ($detalleVenta) {
                $kilometrajeProximo = $detalleVenta->vehiculo->Kilometraje + $aceiteSeleccionado->Kilometraje;
            }

            // Calcular la fecha del próximo mantenimiento sumando el LapsoDeTiempo a la fecha actual
            $fechaProximoMantenimiento = now()->addMonths($aceiteSeleccionado->LapsoDeTiempo);
        }

        // Consultar todas las ventas, mantenimientos, aceites y mecánicos
        $mantenimientoFactura = Venta::all();
        $mantenimientoMantenimiento = Mantenimiento::all();
        $aceitemt = ConfiguracionAceite::all();
        $mecanicomantenimiento = Empleado::with('persona')->get(); // Obtener todos los mecánicos con la relación persona

        return view('components.mantenimiento.mantenimiento-vehiculo', [
            'typeSales' => $typeSales,
            'aceitemt' => $aceitemt,
            'aceiteSeleccionado' => $aceiteSeleccionado, // Pasamos el aceite seleccionado a la vista
            'typeMaintenance' => $typeMaintenance,
            'mantenimiento' => $typeMaintenance,
            'mantenimientoFactura' => $mantenimientoFactura,
            'mantenimientoMantenimiento' => $mantenimientoMantenimiento,
            'mecanicomantenimiento' => $mecanicomantenimiento, // Pasamos los mecánicos a la vista
            'requestmt' => $request->factura,
            'requestmm' => $request->mantenimiento,
            'requestAceiteMantenimiento' => $request->aceitemant, // Pasamos el aceite seleccionado
            'requestMecanicoMantenimiento' => $request->mecanico, // Pasamos el mecánico seleccionado
            'detalleVenta' => $detalleVenta,
            'servicios' => $servicios, // Pasamos la variable $servicios a la vista
            'vehiculo' => $detalleVenta ? $detalleVenta->vehiculo : null, // Asegúrate de que no sea null
            'empleado' => $empleado, // Pasamos el empleado seleccionado a la vista
            'kilometrajeProximo' => $kilometrajeProximo, // Pasamos el kilometraje próximo a la vista
            'fechaProximoMantenimiento' => $fechaProximoMantenimiento // Pasamos la fecha del próximo mantenimiento a la vista
        ]);
    }
}
