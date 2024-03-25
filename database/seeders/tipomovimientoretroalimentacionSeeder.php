<?php

namespace Database\Seeders;
use App\Models\tipomovimientoretroalimentacion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class tipomovimientoretroalimentacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tiposMovimiento = [
            'Acción Correctiva',
            'Reconocimiento',
            'Mejora de Procesos',
            'Capacitación Adicional',
            'Seguimiento de Garantía',
            // Agrega más tipos si es necesario
        ];

        // Insertar cada tipo de movimiento en la tabla
        foreach ($tiposMovimiento as $tipo) {
            TipoMovimientoRetroalimentacion::create([
                'Descripcion' => $tipo,
                'Status' => 1 // Por defecto, todos los tipos de movimiento estarán activos
            ]);
        }
    }
}
