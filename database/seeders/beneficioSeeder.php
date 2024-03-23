<?php

namespace Database\Seeders;
use App\Models\beneficio;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class beneficioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Datos de prueba para los beneficios
        $beneficio = [
            [
                'Descripcion' => 'Descuento del 10% en repuestos',
                'Status' => 1,
            ],
            [
                'Descripcion' => 'Mantenimiento preventivo gratuito',
                'Status' => 1,
            ],
            // Agrega más beneficios según sea necesario
        ];

        // Insertar los datos en la tabla de beneficios usando el método create
        foreach ($beneficio as $beneficio) {
            beneficio::create($beneficio);
        }
    }
}
