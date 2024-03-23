<?php

namespace Database\Seeders;
USE App\Models\viasolicitud;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class viasolicitudSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        viasolicitud::create([
            'Descripcion' => 'Online',
            'Status' => true,
        ]);

        viasolicitud::create([
            'Descripcion' => 'Telefónica',
            'Status' => true,
        ]);

        viasolicitud::create([
            'Descripcion' => 'Presencial',
            'Status' => true,
        ]);

        viasolicitud::create([
            'Descripcion' => 'Correo Electrónico',
            'Status' => true,
        ]);
    }
}
