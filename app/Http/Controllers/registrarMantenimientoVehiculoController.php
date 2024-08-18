<?php

namespace App\Http\Controllers;

use App\Models\Mantenimiento;
use Illuminate\Http\Request;
use App\Models\DetalleMantenimiento;
use App\Models\Vehiculo;
use App\Models\Servicio;
use App\Models\ConfiguracionAceite;
use Illuminate\Support\Facades\Redirect;

class registrarMantenimientoVehiculoController extends Controller
{
    public function store(Request $request)
    {
        // Validar los datos de la solicitud
        $validated = $request->validate([
            'factura' => 'nullable|exists:venta,IdVenta',
            'mantenimiento' => 'nullable|exists:mantenimiento,IdMantenimiento',
            'cliente' => 'required|exists:clientes,IdCliente',
            'vin' => 'required|exists:vehiculos,VIN',
            'kilometraje' => 'required|integer|min:0',
            'servicios' => 'required|array',
            'servicios.*' => 'exists:servicio,IdServicio',
            'aceitemant' => 'required|exists:configuracion_aceite,IdConfiguracionAceite' // Validar que el aceite seleccionado existe
        ]);

        // Obtener el vehículo asociado al VIN
        $vehiculo = Vehiculo::where('VIN', $validated['vin'])->firstOrFail();


        // Obtener el motor asociado al vehículo
        $motor = $vehiculo->motor;

        // Obtener el aceite seleccionado
        $aceiteSeleccionado = ConfiguracionAceite::findOrFail($validated['aceitemant']);

        // Filtrar servicios que se pueden aplicar al motor y cuyo kilometraje es válido
        $serviciosDisponibles = Servicio::where('IdMotor', $motor->id)
            ->where('KilometrajeAceite', '<=', $validated['kilometraje'])
            ->where('KilometrajeInicial', '<=', $validated['kilometraje'])
            ->get();

        // Filtrar solo los servicios seleccionados por el usuario que son válidos para el motor y kilometraje
        $serviciosSeleccionados = $serviciosDisponibles->whereIn('IdServicio', $validated['servicios']);

        // Crear un nuevo mantenimiento
        $mantenimiento = new Mantenimiento();
        $mantenimiento->IdVenta = $validated['factura'];
        $mantenimiento->IdMantenimientoAnterior = $validated['mantenimiento'] ?? null;
        $mantenimiento->IdCliente = $validated['cliente'];
        $mantenimiento->IdVehiculo = $vehiculo->id;
        $mantenimiento->KilometrajeActual = $validated['kilometraje'];
        $mantenimiento->KilometrajeProximo = $this->calcularKilometrajeProximo($vehiculo, $validated['kilometraje'], $aceiteSeleccionado->Kilometraje);
        $mantenimiento->FechaMantenimientoActual = now();
        $mantenimiento->FechaProximoMantenimiento = now()->addMonths($aceiteSeleccionado->LapsoDeTiempo);
        $mantenimiento->IdEmpleado = auth()->user()->id;
        $mantenimiento->Monto = $this->calcularMontoTotal($serviciosSeleccionados->pluck('IdServicio')->toArray());

        // Guardar el mantenimiento en la base de datos
        $mantenimiento->save();

        // Guardar los detalles del mantenimiento (servicios)
        foreach ($serviciosSeleccionados as $servicio) {
            $detalleMantenimiento = new DetalleMantenimiento();
            $detalleMantenimiento->IdMantenimiento = $mantenimiento->id;
            $detalleMantenimiento->IdServicio = $servicio->IdServicio;
            $detalleMantenimiento->Precio = $servicio->Precio;
            $detalleMantenimiento->save();
        }

        // Redireccionar o mostrar un mensaje de éxito
        return redirect('registrar-mantenimiento')->with('success', 'Guardado con éxito');
    }

    private function calcularKilometrajeProximo($vehiculo, $kilometrajeActual, $kilometrajeAceite)
    {
        return $kilometrajeActual + $kilometrajeAceite;
    }

    private function calcularMontoTotal($servicios)
    {
        return Servicio::whereIn('IdServicio', $servicios)->sum('Precio');
    }
}
