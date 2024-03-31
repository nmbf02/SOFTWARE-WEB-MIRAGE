<?php

namespace Database\Seeders;
use App\Models\prioridadcomunicacion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class prioridadcomunicacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $prioridades = [
            ['descripcion' => 'Alta'],
            ['descripcion' => 'Media'],
            ['descripcion' => 'Baja']
        ];

        foreach ($prioridades as $prioridad) {
            prioridadcomunicacion::create([
                'Descripcion' => $prioridad['descripcion'],
                'Status' => 1,
            ]);
        }
    }
}
