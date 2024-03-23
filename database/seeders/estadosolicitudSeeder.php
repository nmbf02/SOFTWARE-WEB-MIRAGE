<?php

namespace Database\Seeders;
use App\Models\estadosolicitud;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class estadosolicitudSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $estados = [
            'Pendiente de Revisión',
            'Aprobado',
            'Rechazado',
            'En Verificación'
            // Agrega más estados si es necesario
        ];

        // Insertar los estados en la tabla estadosolicitud
        foreach ($estados as $estado) {
            estadosolicitud::create([
                'Descripcion' => $estado,
                'Status' => 1 // Por defecto, todos los estados están activos
            ]);

        }
    }
}
