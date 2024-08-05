<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use Barryvdh\DomPDF\Facade\Pdf;

class PDFController extends Controller
{
    public function generatePDF($IdVenta)
    {
        $venta = Venta::with('cliente', 'detalleVentas.vehiculo', 'moneda')->where('IdVenta', $IdVenta)->first();

        $data = [
            'venta' => $venta,
            'cliente' => $venta->cliente,
            'vehiculo' => $venta->detalleVentas->first()->vehiculo,
            'moneda' => $venta->moneda,
        ];

        $pdf = Pdf::loadView('reports.contratoventavehiculo', $data);

        return $pdf->stream('contratoventa.pdf');
    }
}