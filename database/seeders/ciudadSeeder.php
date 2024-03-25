<?php

namespace Database\Seeders;
use App\Models\ciudadmodel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ciudadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ciudades = [
            'Santo Domingo',
            'Santiago de los Caballeros',
            'Santo Domingo Este',
            'Santo Domingo Oeste',
            'Santo Domingo Norte',
            'San Cristóbal',
            'La Romana',
            'San Pedro de Macorís',
            'San Francisco de Macorís',
            'La Vega',
            'Puerto Plata',
            'Salvaleón de Higüey',
            'Moca',
            'Bonao',
            'San Juan de la Maguana',
            'Baní',
            'San Fernando de Monte Cristi',
            'Hato Mayor del Rey',
            'Cotuí',
            'Nagua'
            // Agrega el resto de las ciudades aquí
        ];

        foreach ($ciudades as $ciudad) {
            ciudadmodel::create([
                'Descripcion' => $ciudad,
                'IdProvincia' => 1, // Suponiendo que todas las ciudades pertenecen a una provincia específica
                'Status' => 1 // Suponiendo que todas las ciudades están activas
            ]);
        }
    }
}
