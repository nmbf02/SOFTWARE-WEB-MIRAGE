<?php

namespace Database\Seeders;
use App\Models\clasificacionvehiculos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class clasificacionvehiculosS extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clasificaciones = [
            ['Descripcion' => 'Comercial'],
            ['Descripcion' => 'Personal'],
            ['Descripcion' => 'De carga'],
            ['Descripcion' => 'De lujo'],
            // Agrega más clasificaciones según sea necesario
        ];

        foreach ($clasificaciones as $clasificacion) {
            clasificacionvehiculos::create($clasificacion);
        }
    }
}
