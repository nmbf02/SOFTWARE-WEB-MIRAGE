<?php

namespace Database\Seeders;
use App\Models\tipoabonoprestamo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class tipodeduccionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tiposDeducciones = [
            'Impuesto sobre la Renta',
            'Seguro Médico',
            'Pensión',
            'Seguridad Social',
            'Préstamo Personal',
            'Cuota Sindical',
            'Impuesto de Matriculación',
            'Gastos Administrativos',
            'Comisiones',
            'Seguro de Vehículo',
            // Agrega más tipos de deducciones si lo deseas
        ];

        // Insertar los tipos de deducciones en la base de datos
        foreach ($tiposDeducciones as $tipoDeduccion) {
            tipoabonoprestamo::create([
                'Descripcion' => $tipoDeduccion,
                'Status' => true, // Todos los tipos de deducciones se consideran activos por defecto
            ]);
        }
    }
}
