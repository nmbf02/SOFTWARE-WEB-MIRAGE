<?php

namespace Database\Seeders;
use App\Models\estadorenta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class estadorentaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Array de descripciones de estados de renta
        $descripciones = [
            'Reservada',
            'Activa',
            'Finalizada',
            'Cancelada',
            // Agrega más descripciones si es necesario
        ];

        // Insertar datos de ejemplo en la tabla
        foreach ($descripciones as $descripcion) {
            estadorenta::create([
                'Descripcion' => $descripcion,
                'Status' => 1 // Se establece en activo por defecto
            ]);

        }
    }
}
