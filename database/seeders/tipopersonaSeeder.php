<?php

namespace Database\Seeders;
use App\Models\tipopersona;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class tipopersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        tipopersona::create([
            'Descripcion' => 'Cliente',
            'Status' => 1,
        ]);

        tipopersona::create([
            'Descripcion' => 'Empleado',
            'Status' => 1,
        ]);

        tipopersona::create([
            'Descripcion' => 'Proveedor',
            'Status' => 1,
        ]);

        tipopersona::create([
            'Descripcion' => 'Socio',
            'Status' => 1,
        ]);

        tipopersona::create([
            'Descripcion' => 'Mecanico',
            'Status' => 1,
        ]);

        tipopersona::create([
            'Descripcion' => 'Vendedor',
            'Status' => 1,
        ]);
    }
}
