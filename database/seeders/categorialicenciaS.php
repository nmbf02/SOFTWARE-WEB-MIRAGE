<?php

namespace Database\Seeders;
use App\Models\categorialicencia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class categorialicenciaS extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categorias = [
            [
                'Descripcion' => 'Licencia de conducir para vehículos de pasajeros (Categoría 1)',
                'Abreviatura' => 'Cat. 1',
                'Status' => 1,
            ],
            [
                'Descripcion' => 'Licencia de conducir para motocicletas (Categoría 2)',
                'Abreviatura' => 'Cat. 2',
                'Status' => 1,
            ],
            [
                'Descripcion' => 'Licencia de conducir para vehículos comerciales livianos (Categoría 3)',
                'Abreviatura' => 'Cat. 3',
                'Status' => 1,
            ],
            [
                'Descripcion' => 'Licencia de conducir para vehículos comerciales pesados (Categoría 4)',
                'Abreviatura' => 'Cat. 4',
                'Status' => 1,
            ],
            [
                'Descripcion' => 'Licencia de conducir para vehículos de carga (Categoría 5)',
                'Abreviatura' => 'Cat. 5',
                'Status' => 1,
            ],
            [
                'Descripcion' => 'Licencia de conducir para transporte de pasajeros (Categoría 6)',
                'Abreviatura' => 'Cat. 6',
                'Status' => 1,
            ],
            [
                'Descripcion' => 'Licencia de conducir para vehículos de emergencia (Categoría 7)',
                'Abreviatura' => 'Cat. 7',
                'Status' => 1,
            ],
            [
                'Descripcion' => 'Licencia de conducir para vehículos todo terreno (Categoría 8)',
                'Abreviatura' => 'Cat. 8',
                'Status' => 1,
            ],
            [
                'Descripcion' => 'Licencia de conducir para vehículos especiales (Categoría 9)',
                'Abreviatura' => 'Cat. 9',
                'Status' => 1,
            ],
            [
                'Descripcion' => 'Licencia de conducir para vehículos de construcción (Categoría 10)',
                'Abreviatura' => 'Cat. 10',
                'Status' => 1,
            ],
            // Puedes agregar más categorías según sea necesario
        ];

        foreach ($categorias as $categoria) {
            CategoriaLicencia::create($categoria);
        }
    }
}
