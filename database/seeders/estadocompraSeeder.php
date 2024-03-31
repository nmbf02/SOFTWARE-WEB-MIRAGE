<?php

namespace Database\Seeders;
use App\Models\estadocompra;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class estadocompraSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */

     /**
     * Lista de estados de compra comunes.
     *
     */
    
    public function run(): void
    {
         // Lista de estados de compra comunes
         $estadosCompra = [
            'Pendiente',
            'Aprobada',
            'Cancelada',
            'Completada',
            // Agregar más estados si es necesario
        ];

        // Iniciar el ID en 1
        $id = 1;

        foreach ($estadosCompra as $estado) {
            // Insertar el estado de compra con el ID autoincremental
            EstadoCompra::create([
                'IdEstadoCompra' => $id++,
                'Descripcion' => $estado,
                'Status' => 1 // Por defecto, todos los estados están activos
            ]);
        }
    }
}
