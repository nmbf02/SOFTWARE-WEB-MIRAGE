<?php

namespace Database\Seeders;
use App\Models\tiporetroalimentacion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class tiporetroalimentacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Datos para insertar en la tabla
        $datos = [
            [
                'Descripcion' => 'Sugerencia',
                'Status' => 1,
            ],
            [
                'Descripcion' => 'Reclamo',
                'Status' => 1,
            ],
            [
                'Descripcion' => 'Cumplimiento',
                'Status' => 1,
            ],
            [
                'Descripcion' => 'Consulta',
                'Status' => 1,
            ],
            // Puedes agregar más datos según sea necesario
        ];

        // Insertar los datos en la tabla usando el método create
        foreach ($datos as $dato) {
            tiporetroalimentacion::create($dato);
        }
    }
}
