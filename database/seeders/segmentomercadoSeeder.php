<?php

namespace Database\Seeders;
use App\Models\segmentomercado;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class segmentomercadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $segmentos = [
            'Compactos',
            'SUV',
            'Lujo',
            'Deportivos',
            'Comerciales',
            'Furgonetas',
            'Hatchbacks',
            'Sedanes',
            'Coupes',
            'Camionetas',
            'Monovolumenes',
            'Electricos',
            // Agrega más segmentos según sea necesario
        ];

        foreach ($segmentos as $segmento) {
            segmentomercado::create([
                'Descripcion' => $segmento,
                'Status' => true // Establece el estado como activo
            ]);
        }
    }
}
