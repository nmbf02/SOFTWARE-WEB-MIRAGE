<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\cargoempleado;

class cargoempleadoS extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cargos = [
            'Administrador',
            'Gerente general',
            'Gerente de ventas',
            'Asesor de ventas',
            'Mecánico automotriz',
            'Recepcionista',
            'Contador',
            'Auxiliar administrativo',
            'Encargado de almacén',
            'Jefe de servicio',
            'Técnico de vehículos',
            'Asistente de recursos humanos',
            'Supervisor de ventas',
            'Asistente de taller',
            'Asesor financiero',
            'Chofer',
            'Vendedor de repuestos',
            'Secretaria ejecutiva',
            'Asistente de gerencia',
            'Especialista en marketing',
            'Asesor de financiamiento',
            'Ingeniero de ventas',
        ];

        foreach ($cargos as $cargo) {
            cargoempleado::create([
                'Descripcion' => $cargo,
                'Status' => 1,
            ]);
        }
    }
}
