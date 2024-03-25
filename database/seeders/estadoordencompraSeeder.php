<?php

namespace Database\Seeders;
use App\Models\estadoordencompra;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class estadoordencompraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $estados = [
            ['Descripcion' => 'Pendiente de Aprobación', 'Status' => 1],
            ['Descripcion' => 'Aprobada', 'Status' => 1],
            ['Descripcion' => 'Rechazada', 'Status' => 1],
            // Agrega más estados según sea necesario
        ];

        foreach ($estados as $estado) {
            estadoordencompra::create($estado);
        }
    }
}
