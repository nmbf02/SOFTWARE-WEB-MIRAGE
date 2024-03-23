<?php

namespace Database\Seeders;
USE App\Models\transmisionvehiculos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class transmisionvehiculosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear registros de tipos de transmisión de vehículos
        transmisionvehiculos::create([
            'Descripcion' => 'Transmisión Manual',
            'Status' => true,
        ]);

        transmisionvehiculos::create([
            'Descripcion' => 'Transmisión Automática',
            'Status' => true,
        ]);

        transmisionvehiculos::create([
            'Descripcion' => 'Transmisión CVT (Transmisión Variable Continua)',
            'Status' => true,
        ]);

        transmisionvehiculos::create([
            'Descripcion' => 'Transmisión DSG (Doppelkupplungsgetriebe)',
            'Status' => true,
        ]);

        transmisionvehiculos::create([
            'Descripcion' => 'Transmisión Tiptronic',
            'Status' => true,
        ]);
    }
}
