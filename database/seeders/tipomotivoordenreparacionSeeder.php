<?php

namespace Database\Seeders;
use App\Models\tipomotivoordenreparacion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class tipomotivoordenreparacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $motivos = [
            'Mantenimiento Preventivo',
            'Fallo del Motor',
            'Sistema Eléctrico',
            'Aire Acondicionado',
            'Reparación de Carrocería'
            // Agrega más motivos si lo deseas
        ];

        foreach ($motivos as $motivo) {
            TipoMotivoOrdenReparacion::create([
                'Descripcion' => $motivo,
                'Status' => 1 // Por defecto, establecemos todos los motivos como activos
            ]);
        }
    }
}
