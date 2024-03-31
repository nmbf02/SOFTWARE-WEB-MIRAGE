<?php

namespace Database\Seeders;
use App\Models\tiponominaempleado;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class tiponominaempleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tiposNomina = [
            [
                'Descripcion' => 'Nómina Mensual',
                'Dias' => 30,
                'Status' => 1,
            ],
            [
                'Descripcion' => 'Nómina Quincenal',
                'Dias' => 15,
                'Status' => 1,
            ],
            [
                'Descripcion' => 'Nómina de Directivos',
                'Dias' => 30,
                'Status' => 1,
            ],
            [
                'Descripcion' => 'Nómina por Horas Trabajadas',
                'Dias' => 0, // Asignar un valor por defecto, por ejemplo 0
                'Status' => 1,
            ],
            // Puedes añadir más tipos de nómina según sea necesario
        ];

        // Insertar datos en la tabla
        foreach ($tiposNomina as $tipoNomina) {
            tiponominaempleado::create($tipoNomina);
        }
    }
}
