<?php

namespace Database\Seeders;
use App\Models\condicionseguro;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class condicionseguroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $condiciones_seguro = [
            'Cobertura de daños a terceros',
            'Cobertura de daños propios',
            'Cobertura de responsabilidad civil',
            'Cobertura de robo',
            'Cobertura de asistencia en carretera',
            'Cobertura de accidentes personales del conductor y ocupantes',
            'Deducibles y límites de cobertura',
            // Agrega más condiciones si lo deseas
        ];

        foreach ($condiciones_seguro as $condicion) {
            condicionseguro::create([
                'Descripcion' => $condicion,
                'FechaEfectiva' => now(), // Usa la fecha actual como fecha efectiva
                'Status' => 1 // Suponiendo que todas las condiciones están activas
            ]);
        }
    }
}
