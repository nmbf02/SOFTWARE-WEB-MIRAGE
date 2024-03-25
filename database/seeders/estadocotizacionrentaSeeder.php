<?php

namespace Database\Seeders;
use App\Models\estadocotizacionrenta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class estadocotizacionrentaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $estados = [
            'Pendiente',
            'Aprobada',
            'Rechazada',
            'Cancelada',
            'En Proceso',
            'Completada',
            'Vencida'
            // Agrega más estados si es necesario
        ];

        foreach ($estados as $estado) {
            EstadoCotizacionRenta::create([
                'Descripcion' => $estado,
                'Status' => true // Por defecto, todos los estados estarán activos
            ]);
        }
    }
}
