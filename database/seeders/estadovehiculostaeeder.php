<?php

namespace Database\Seeders;
use App\Models\estadovehiculos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class estadovehiculostaeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        estadovehiculos::insert([
            ['Descripcion' => 'Nuevo', 'Status' => 1],
            ['Descripcion' => 'Usado', 'Status' => 1],
            ['Descripcion' => 'En reparación', 'Status' => 1],
            ['Descripcion' => 'Vendido', 'Status' => 1],
            // Agrega más registros de estado según sea necesario
        ]);
    }
}
