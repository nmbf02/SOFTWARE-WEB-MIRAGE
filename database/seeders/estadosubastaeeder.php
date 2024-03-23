<?php

namespace Database\Seeders;
use App\Models\estadosubasta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class estadosubastaeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Array de descripciones de estados de subasta
         $descripciones = [
            'Activa',
            'Pendiente',
            'Finalizada',
            'Cancelada',
            // Agrega más estados si es necesario
        ];

        // Insertar cada estado en la tabla
        foreach ($descripciones as $descripcion) {
            estadosubasta::create([
                'Descripcion' => $descripcion,
                'Status' => 1, // Por defecto, todos los estados estarán activos
            ]);
        }
    }
}
