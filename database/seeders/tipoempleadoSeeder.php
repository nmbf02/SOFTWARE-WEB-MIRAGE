<?php

namespace Database\Seeders;
use App\Models\tipoempleado;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class tipoempleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tiposEmpleados = [
            'Vendedor de Autos Nuevos',
            'Vendedor de Autos Usados',
            'Asesor de Servicio',
            'Mecánico',
            'Recepcionista de Servicio',
            'Gerente de Ventas',
            'Gerente de Servicio',
            'Gerente de Finanzas',
            'Contador',
            'Gerente General',
            'Asistente Administrativo',
            // Agrega más tipos de empleados si lo deseas
        ];

        foreach ($tiposEmpleados as $tipoEmpleado) {
            tipoempleado::create([
                'Descripcion' => $tipoEmpleado,
                'Status' => 1 // Establecer el estado como activo por defecto
            ]);
        }
    }
}
