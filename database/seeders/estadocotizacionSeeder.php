<?php

namespace Database\Seeders;
use App\Models\estadocotizacion;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class estadocotizacionSeeder extends Seeder
{

    /**
     * Lista de descripciones de estados de cotización predefinidos.
     *
     * @var array
     */
    private $descripcionesEstados = [
        'Enviada',
        'Pendiente de Aprobación',
        'Aprobada',
        'Rechazada',
        'Cancelada',
        // Puedes agregar más estados si lo deseas
    ];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->descripcionesEstados as $descripcion) {
            estadocotizacion::create([
                'Descripcion' => $descripcion,
                'Status' => 1 // Estado activo por defecto
            ]);

        }
    }
}
