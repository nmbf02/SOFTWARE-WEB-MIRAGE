<?php

namespace Database\Seeders;
use App\Models\tipoprestamo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class tipoprestamoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        tipoprestamo::create([
            'Nombre' => 'Préstamo para Vehículos Nuevos',
            'Descripcion' => 'Financiamiento destinado a la adquisición de vehículos nuevos.',
            'PlazoMaximo' => 60,
            'PagoInicialMinimo' => 1000.00,
            'TasaInteres' => 5.5,
            'Status' => 1,
        ]);

        tipoprestamo::create([
            'Nombre' => 'Préstamo para Vehículos Usados',
            'Descripcion' => 'Financiamiento destinado a la adquisición de vehículos usados.',
            'PlazoMaximo' => 48,
            'PagoInicialMinimo' => 500.00,
            'TasaInteres' => 6.0,
            'Status' => 1,
        ]);

        tipoprestamo::create([
            'Nombre' => 'Préstamo para Flotas de Vehículos',
            'Descripcion' => 'Financiamiento para la adquisición de múltiples vehículos para empresas.',
            'PlazoMaximo' => 72,
            'PagoInicialMinimo' => 5000.00,
            'TasaInteres' => 4.75,
            'Status' => 1,
        ]);

        tipoprestamo::create([
            'Nombre' => 'Préstamo para Reparaciones y Mantenimiento de Vehículos',
            'Descripcion' => 'Financiamiento para cubrir los costos de reparaciones y mantenimiento de vehículos.',
            'PlazoMaximo' => 24,
            'PagoInicialMinimo' => 0.00,
            'TasaInteres' => 8.0,
            'Status' => 1,
        ]);

        tipoprestamo::create([
            'Nombre' => 'Préstamo para Accesorios y Mejoras de Vehículos',
            'Descripcion' => 'Financiamiento para la compra e instalación de accesorios y mejoras en vehículos.',
            'PlazoMaximo' => 36,
            'PagoInicialMinimo' => 200.00,
            'TasaInteres' => 7.25,
            'Status' => 1,
        ]);

        tipoprestamo::create([
            'Nombre' => 'Préstamo para Cambio de Vehículo',
            'Descripcion' => 'Financiamiento para el cambio de vehículo, cubriendo los costos de compra y venta.',
            'PlazoMaximo' => 60,
            'PagoInicialMinimo' => 1000.00,
            'TasaInteres' => 6.5,
            'Status' => 1,
        ]);
    }
}
