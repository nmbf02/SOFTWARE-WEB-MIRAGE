<?php

namespace Database\Seeders;
use App\Models\formapago;
use App\Models\frecuenciamantenimiento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class frecuenciamantenimientoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        frecuenciamantenimiento::insert([
            [
                'Descripcion' => 'Cada 5000 km',
                'Status' => 1 // Activo
            ],
            [
                'Descripcion' => 'Anual',
                'Status' => 1 // Activo
            ],
            [
                'Descripcion' => 'Semestral',
                'Status' => 1 // Activo
            ],
            [
                'Descripcion' => 'Mensual',
                'Status' => 1 // Activo
            ],
            [
                'Descripcion' => 'Trimestral',
                'Status' => 0 // Inactivo
            ],
            // Agrega más registros con diferentes estados si lo deseas
        ]);

        
    }
}
