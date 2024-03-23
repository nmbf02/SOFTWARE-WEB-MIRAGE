<?php

namespace Database\Seeders;
use App\Models\tipomantenimiento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class tipomantenimientoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        tipomantenimiento::create([
            'Descripcion' => 'Mantenimiento Preventivo',
            'IdFrecuenciaMantenimiento' => 1, // Reemplaza con el Id correcto de FrecuenciaMantenimiento según tu lógica
            'Status' => 1 // Activo
        ]);

        tipomantenimiento::create([
            'Descripcion' => 'Mantenimiento Correctivo',
            'IdFrecuenciaMantenimiento' => 2, // Reemplaza con el Id correcto de FrecuenciaMantenimiento según tu lógica
            'Status' => 1 // Activo
        ]);

        tipomantenimiento::create([
            'Descripcion' => 'Mantenimiento de Carrocería y Pintura',
            'IdFrecuenciaMantenimiento' => 3, // Reemplaza con el Id correcto de FrecuenciaMantenimiento según tu lógica
            'Status' => 1 // Activo
        ]);

        tipomantenimiento::create([
            'Descripcion' => 'Mantenimiento de Interior',
            'IdFrecuenciaMantenimiento' => 4, // Reemplaza con el Id correcto de FrecuenciaMantenimiento según tu lógica
            'Status' => 1 // Activo
        ]);

        tipomantenimiento::create([
            'Descripcion' => 'Mantenimiento de Aire Acondicionado',
            'IdFrecuenciaMantenimiento' => 5,
            'Status' => 1
        ]);
    }
}
