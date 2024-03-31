<?php

namespace Database\Seeders;
use App\Models\tiposeguro;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class tiposeguroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TipoSeguro::create([
            'Descripcion' => 'Seguro de Vehículos Comercial',
            'Status' => true,
        ]);

        TipoSeguro::create([
            'Descripcion' => 'Seguro de Responsabilidad Civil',
            'Status' => true,
        ]);

        TipoSeguro::create([
            'Descripcion' => 'Seguro a Todo Riesgo',
            'Status' => true,
        ]);

        TipoSeguro::create([
            'Descripcion' => 'Seguro contra Robo',
            'Status' => true,
        ]);

        TipoSeguro::create([
            'Descripcion' => 'Seguro de Salud',
            'Status' => true,
        ]);

        TipoSeguro::create([
            'Descripcion' => 'Seguro de Vida',
            'Status' => true,
        ]);
    }
}
