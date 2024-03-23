<?php

namespace Database\Seeders;
use App\Models\moneda;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class monedaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $monedas = [
            [
                'Descripcion' => 'Dólar Estadounidense',
                'Tasa' => 58.50, // Tasa aproximada según el momento actual
                'Status' => 1
            ],
            [
                'Descripcion' => 'Euro',
                'Tasa' => 69.50, // Tasa aproximada según el momento actual
                'Status' => 1
            ],
            [
                'Descripcion' => 'Peso Dominicano',
                'Tasa' => 1.00, // Moneda local, por lo que la tasa es 1:1
                'Status' => 1
            ],
            [
                'Descripcion' => 'Libra Esterlina',
                'Tasa' => 80.00, // Tasa aproximada según el momento actual
                'Status' => 1
            ]
            // Agrega más monedas si lo deseas
        ];

        // Insertar datos de ejemplo en la tabla moneda
        foreach ($monedas as $moneda) {
            moneda::create($moneda);
        }
    }
}
