<?php

namespace Database\Seeders;
USE App\Models\traccionvehiculos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class traccionvehiculosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        traccionvehiculos::create([
            'Descripcion' => 'Tracción Delantera',
            'Status' => true,
        ]);

        traccionvehiculos::create([
            'Descripcion' => 'Tracción Trasera',
            'Status' => true,
        ]);

        traccionvehiculos::create([
            'Descripcion' => 'Tracción Integral',
            'Status' => true,
        ]);

        traccionvehiculos::create([
            'Descripcion' => 'Tracción 4x4',
            'Status' => true,
        ]);

        traccionvehiculos::create([
            'Descripcion' => 'Tracción 4x2',
            'Status' => true,
        ]);

        traccionvehiculos::create([
            'Descripcion' => 'Tracción AWD (All-Wheel Drive)',
            'Status' => true,
        ]);

    }
}
