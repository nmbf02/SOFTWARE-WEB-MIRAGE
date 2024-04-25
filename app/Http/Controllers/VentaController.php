<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use Barryvdh\DomPDF\Facade as PDF;

class VentaController extends Controller
{
    public function generarContratoVenta($idVenta)
    {
        // Obtener la venta por ID junto con sus relaciones necesarias
        $venta = Venta::with(['cliente', 'usuario', 'moneda', 'cotizacion', 'solicitudPrestamoVehiculo', 'detalleVentas'])
            ->findOrFail($idVenta);

        // Preparar los datos que vamos a enviar a la vista
        $datos = [
            'cliente' => $venta->cliente->nombre, // Asumiendo que el modelo Cliente tiene un atributo 'nombre'
            'usuario' => $venta->usuario->nombre, // Asumiendo que el modelo Usuario tiene un atributo 'nombre'
            'total' => $venta->Total,
            'moneda' => $venta->moneda->nombre, // Asumiendo que el modelo Moneda tiene un atributo 'nombre'
            'fecha' => now()->format('d/m/Y'), // Usar la fecha actual para el documento
            // Agrega más datos según sea necesario
        ];

        // Cargar la vista 'reports/contrato_venta_vehiculo' y pasar los datos
        $pdf = PDF::loadView('reports.contrato_venta_vehiculo', $datos);

        // Retornar el PDF al navegador para su descarga
        return $pdf->download('contrato_venta_vehiculo_' . $idVenta . '.pdf');
    }
}
