<?php

namespace App\Http\Controllers;
use App\Models\Mantenimiento;
use Illuminate\Http\Request;
use App\Models\DetalleMantenimiento;
use Illuminate\Support\Facades\Redirect;


class registrarMantenimientoVehiculoController extends Controller
{
    public function store(Request $request)
    {
        // Validar los datos de la solicitud
        $request->validate([
            'factura' => 'required|exists:ventas,IdVenta', // Validar que la factura exista en la tabla ventas
            'mantenimiento' => 'nullable|exists:mantenimientos,IdMantenimiento', // Opcional, si ya existe un mantenimiento previo
            'cliente' => 'required|exists:clientes,IdCliente', // Validar que el cliente exista
            'vin' => 'required', // Se puede agregar validación adicional si es necesario
            'kilometraje' => 'required|integer|min:0',
            // Añadir más validaciones según los datos requeridos
        ]);

        // Crear un nuevo mantenimiento
        $mantenimiento = new Mantenimiento();
        $mantenimiento->IdVenta = $request->factura;
        $mantenimiento->IdMantenimientoAnterior = $request->mantenimiento;
        $mantenimiento->IdCliente = $request->cliente;
        $mantenimiento->IdVehiculo = $request->vin; // Asegúrate de que sea el IdVehiculo y no solo el VIN
        $mantenimiento->KilometrajeActual = $request->kilometraje;
        $mantenimiento->KilometrajeProximo = $request->kilometraje_proximo; // Esto debería calcularse en base a la lógica de negocio
        $mantenimiento->FechaMantenimientoActual = now();
        $mantenimiento->FechaProximoMantenimiento = $request->fecha_proximo_mantenimiento; // Calculado o proporcionado
        $mantenimiento->IdEmpleado = auth()->user()->id; // Asumiendo que el usuario autenticado es el empleado
        $mantenimiento->Monto = $request->monto_total; // Total de los servicios seleccionados

        // Guardar el mantenimiento en la base de datos
        $mantenimiento->save();

        // Guardar los detalles del mantenimiento (servicios)
        if ($request->has('servicios')) {
            foreach ($request->servicios as $servicio) {
                $detalleMantenimiento = new DetalleMantenimiento();
                $detalleMantenimiento->IdMantenimiento = $mantenimiento->IdMantenimiento;
                $detalleMantenimiento->IdServicio = $servicio['id'];
                $detalleMantenimiento->Precio = $servicio['precio'];
                $detalleMantenimiento->save();
            }
        }

        // Redireccionar o mostrar un mensaje de éxito
        return redirect('SeleccionMantenimiento')->with('success', 'Guardado con exito');
    }
}
