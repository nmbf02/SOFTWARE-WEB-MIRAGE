<?php

namespace Database\Seeders;
USE App\Models\tipovehiculos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class tipovehiculosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        tipovehiculos::create([
            'Descripcion' => 'Automóvil',
            'Status' => true,
        ]);

        tipovehiculos::create([
            'Descripcion' => 'SUV',
            'Status' => true,
        ]);

        tipovehiculos::create([
            'Descripcion' => 'Camioneta',
            'Status' => true,
        ]);

        tipovehiculos::create([
            'Descripcion' => 'Camión',
            'Status' => true,
        ]);

        tipovehiculos::create([
            'Descripcion' => 'Furgoneta',
            'Status' => true,
        ]);

        tipovehiculos::create([
            'Descripcion' => 'Microbús',
            'Status' => true,
        ]);
    }
}
