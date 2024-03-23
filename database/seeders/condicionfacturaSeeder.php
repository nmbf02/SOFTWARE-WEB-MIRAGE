<?php

namespace Database\Seeders;
use App\Models\condicionfactura;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class condicionfacturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $condiciones = [
            ['descripcion' => 'Pago al contado', 'cantidad_dias' => 0],
            ['descripcion' => 'Financiamiento a 12 meses', 'cantidad_dias' => 30],
            ['descripcion' => 'Financiamiento a 24 meses', 'cantidad_dias' => 60],
            ['descripcion' => 'Préstamo', 'cantidad_dias' => 45],
            ['descripcion' => 'Leasing', 'cantidad_dias' => 60],
            // Puedes agregar más condiciones según las necesidades de tu proyecto
        ];

        // Insertar las condiciones de factura en la base de datos
        foreach ($condiciones as $condicion) {
            condicionfactura::create([
                'Descripcion' => $condicion['descripcion'],
                'CantidadDias' => $condicion['cantidad_dias'],
                'Status' => 1 // Todas las condiciones estarán activas por defecto
            ]);

        }
    }
}
