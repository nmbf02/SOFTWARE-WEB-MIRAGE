<?php

namespace Database\Seeders;
use App\Models\tipovehiculoconcesionario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class tipovehiculoconcesionarionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        tipovehiculoconcesionario::create([
            'Descripcion' => 'Renta',
            'Status' => true,
        ]);

        tipovehiculoconcesionario::create([
            'Descripcion' => 'Venta',
            'Status' => true,
        ]);

        tipovehiculoconcesionario::create([
            'Descripcion' => 'Subasta',
            'Status' => true,
        ]);
    }
}
