<?php

namespace Database\Seeders;
use App\Models\tiporiesgo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class tiporiesgoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TipoRiesgo::create([
            'Descripcion' => 'Bajo',
            'Status' => true,
        ]);

        TipoRiesgo::create([
            'Descripcion' => 'Moderado',
            'Status' => true,
        ]);

        TipoRiesgo::create([
            'Descripcion' => 'Alto',
            'Status' => true,
        ]);
    }
}
