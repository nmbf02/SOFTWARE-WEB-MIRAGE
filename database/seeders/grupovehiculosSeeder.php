<?php

namespace Database\Seeders;
use App\Models\grupovehiculos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class grupovehiculosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       // Array de descripciones de grupos de vehículos
       $descripciones = [
        'SUV',
        'Compactos',
        'De lujo',
        'Comerciales',
        'Deportivos',
        'Furgonetas',
        'Coupé',
        'Hatchback',
        'Berlina',
        'Pick-up',
        'Descapotables',
        // Puedes agregar más descripciones aquí
    ];

    // Crear registros de ejemplo para la tabla grupovehiculos
    foreach ($descripciones as $descripcion) {
        grupovehiculos::create([
            'Descripcion' => $descripcion,
            'Status' => rand(0, 1) // Generar un valor aleatorio para Status (activo o inactivo)
        ]);
    }
}
}
