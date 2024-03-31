<?php

namespace Database\Seeders;
use App\Models\tiposPorcentaje;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class tipoporcetajeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tiposPorcentaje = [
            [
                'Nombre' => 'Interés Préstamo',
                'Descripcion' => 'Tasa de interés aplicada a los préstamos de vehículos.',
                'RangoDias' => 30,
                'Porcentaje' => 5.5,
                'Status' => 1
            ],
            [
                'Nombre' => 'Depreciación Anual',
                'Descripcion' => 'Porcentaje de depreciación anual aplicado a los vehículos.',
                'RangoDias' => 365, // Ejemplo de rango de días para un año
                'Porcentaje' => 10.25,
                'IncrementoAnual' => 1.5,
                'Status' => 1
            ],
            [
                'Nombre' => 'Comisión de Venta',
                'Descripcion' => 'Porcentaje de comisión que se le otorga a los vendedores por cada venta realizada.',
                'RangoDias' => 0, // Ejemplo de comisión aplicada inmediatamente
                'Porcentaje' => 3.5,
                'Status' => 1
            ],
            [
                'Nombre' => 'Impuesto de Vehículos',
                'Descripcion' => 'Porcentaje del impuesto a pagar por la compra de un vehículo, según la legislación vigente.',
                'RangoDias' => 0, // Ejemplo de impuesto aplicado inmediatamente
                'Porcentaje' => 7.0,
                'Status' => 1
            ],
            [
                'Nombre' => 'Mantenimiento Anual',
                'Descripcion' => 'Porcentaje del costo total del vehículo que se destina al mantenimiento anual del mismo.',
                'RangoDias' => 365, // Ejemplo de mantenimiento anual
                'Porcentaje' => 2.0,
                'Status' => 1
            ],
            // Agregar más tipos de porcentaje según sea necesario
        ];
    
    }
}
