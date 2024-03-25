<?php

namespace Database\Seeders;
use App\Models\tipoabonoprestamo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class tipoabonoprestamoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tiposAbono = [
            'Pago Parcial',
            'Pago Total Anticipado',
            'Pago de Intereses',
            'Amortización a Capital',
            'Recargo por Mora',
            'Cuota Extra',
            'Reestructuración de Deuda',
            'Cancelación de Deuda',
            // Agrega más tipos de abono según sea necesario
        ];

        foreach ($tiposAbono as $tipo) {
            TipoAbonoPrestamo::create([
                'Descripcion' => $tipo,
                'Status' => true // Por defecto, todos los tipos de abono están activos
            ]);
        }
    }
}
