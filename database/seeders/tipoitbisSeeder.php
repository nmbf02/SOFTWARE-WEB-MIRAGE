<?php

namespace Database\Seeders;
use App\Models\tipoitbis;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class tipoitbisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        tipoitbis::create([
            'Nombre' => 'ITBIS General',
            'Descripcion' => 'Tasa de ITBIS aplicable a la mayoría de los productos y servicios gravados.',
            'Porcentaje' => 18.00,
            'Status' => 1
        ]);

        tipoitbis::create([
            'Nombre' => 'ITBIS Reducido',
            'Descripcion' => 'Tasa de ITBIS aplicable a ciertos productos y servicios gravados a una tasa reducida.',
            'Porcentaje' => 10.00,
            'Status' => 1
        ]);

        tipoitbis::create([
            'Nombre' => 'Exento de ITBIS',
            'Descripcion' => 'Productos y servicios exentos de ITBIS, no se aplica impuesto.',
            'Porcentaje' => 0.00,
            'Status' => 1
        ]);

        tipoitbis::create([
            'Nombre' => 'ITBIS Especial',
            'Descripcion' => 'Tasa de ITBIS especial aplicable a ciertos productos y servicios específicos.',
            'Porcentaje' => 5.00,
            'Status' => 1
        ]);

        tipoitbis::create([
            'Nombre' => 'ITBIS Internacional',
            'Descripcion' => 'Tasa de ITBIS aplicable a importaciones y servicios internacionales.',
            'Porcentaje' => 16.00,
            'Status' => 1
        ]);

        // Agrega más tipos de ITBIS según sea necesario
    }
    }

