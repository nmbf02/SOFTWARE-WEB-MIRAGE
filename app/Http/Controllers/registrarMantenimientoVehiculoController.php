<?php

namespace App\Http\Controllers;

use App\Models\Mantenimiento;
use Illuminate\Http\Request;
use App\Models\DetalleMantenimiento;
use App\Models\Vehiculo;
use App\Models\Servicio;
use App\Models\ConfiguracionAceite;
use Illuminate\Support\Facades\Redirect;
use mysql_xdevapi\Exception;

class registrarMantenimientoVehiculoController extends Controller
{
    public function store(Request $request)
    {
        try{

            $mantenimiento2=[
                'factura'=>$request->factura,
                'mantenimiento'=>$request->mantenimiento,
                'cliente'=>$request->cliente,
                'idVehiculo'=>$request->idVehiculo,
                'mecanico'=> $request->mecanico,
                'fechaActual'=>$request->fechaActual,
                'kilometraje'=>$request->kilometraje,
                'KilometrajeProximo'=>$request->KilometrajeProximo,
                'totalInput'=>$request->totalInput,
                'FechaMantenimientoActual'=>$request->FechaMantenimientoActual,
                'FechaProximoMantenimiento'=>$request->FechaProximoMantenimiento,
                'aceiteSeleccionado'=>$request->aceiteSeleccionado,
                'servicios'=>$request->input('servicios'),
            ];

//        dd($mantenimiento2);
        // Validar los datos de la solicitud
//        $validated = $request->validate([
//            'factura' => 'nullable|exists:venta,IdVenta',
//            'mantenimiento' => 'nullable|exists:mantenimiento,IdMantenimiento',
//            'mecanico' => 'nullable|Empleado,IdEmpleado',
////            'aceitemant' => 'required|ConfiguracionAceite,IdConfiguracionAceite',
//            'cliente' => 'required|exists:clientes,IdCliente',
//            'idVehiculo' => 'required|exists:Vehiculos,IdVehiculo',
////            'KilometrajeProximo' => 'required|integer|min:0',
////            'FechaProximoMantenimiento' => 'required|date',
////            'Empleado' => 'nullable|exists:empleado,IdEmpleado',
//            'kilometraje' => 'required|integer|min:0',
////            'total' => 'required|integer|min:0',
////            'servicios' => 'required|array',
////            'servicios.*' => 'servicio,IdServicio'
//        ]);

        // Obtener el vehículo asociado al VIN
        $vehiculo = Vehiculo::where('VIN', $request['vin'])->firstOrFail();


        // Obtener el motor asociado al vehículo
        $motor = $vehiculo->motor;

        // Obtener el aceite seleccionado
        $aceiteSeleccionado = ConfiguracionAceite::findOrFail($request['aceitemant']);

        // Crear un nuevo mantenimiento
        $mantenimiento = new Mantenimiento();
            $mantenimiento->IdVenta = $request->factura;
            $mantenimiento->IdMantenimientoAnterior = $request-> mantenimiento;
            $mantenimiento->IdCliente = $request->cliente;
            $mantenimiento->IdVehiculo =  $request->idVehiculo;
            $mantenimiento->KilometrajeActual =  $request->kilometraje;
            $mantenimiento->KilometrajeProximo = $request->KilometrajeProximo;
            $mantenimiento->FechaProximoMantenimiento = $request->FechaProximoMantenimiento;
            $mantenimiento->FechaMantenimientoActual = $request->FechaMantenimientoActual;
            $mantenimiento->FechaActual = now();
            $mantenimiento->IdEmpleado = $request->mecanico;
            $mantenimiento->Monto = $request->totalInput;
            $mantenimiento->IdConfiguracionAceite = $request->aceiteSeleccionado;

            $mantenimiento->save();

            if($request->servicios!=null){
            foreach ($request->input('servicios') as $servicio) {
                $detalleMantenimiento = new DetalleMantenimiento();
                $detalleMantenimiento->IdMantenimiento = $mantenimiento->IdMantenimiento;
                $detalleMantenimiento->IdServicio = $servicio->IdServicio;
                $detalleMantenimiento->Precio = $servicio->Precio;
                $detalleMantenimiento->save();
            }
        }
        // Guardar los detalles del mantenimiento (servicios)

        // Redireccionar o mostrar un mensaje de éxito

//        return redirect('registrar-mantenimiento')->with('success', 'Guardado con éxito');
        return redirect()->route('SeleccionMantenimiento');
        }  catch (Exception $e){
            dd($e);}
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
