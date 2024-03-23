<?php

namespace Database\Seeders;
use App\Models\tipoingresos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class tipoingresosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tiposIngresos = [
            'Venta de Vehículos',
            'Comisión por Venta',
            'Bonificación por Venta',
            'Ingresos por Servicios Adicionales',
            'Ingresos por Garantías Extendidas',
            'Ingresos por Accesorios Vendidos',
            'Ingresos por Financiamiento',
            'Ingresos por Seguros',
            'Ingresos por Mantenimiento',
            'Ingresos por Refacciones',
            // Puedes agregar más tipos de ingresos según sea necesario
        ];

        // Insertar los tipos de ingresos en la base de datos
        foreach ($tiposIngresos as $tipo) {
            tipoingresos::create([
                'Descripcion' => $tipo,
                'Status' => 1 // Por defecto, establecemos todos los tipos de ingresos como activos
            ]);
        }
    }
}
