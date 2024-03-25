<?php

namespace Database\Seeders;
use App\Models\canalcomunicacion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class canalcomunicacionS extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $canalesComunicacion = [
            'Correo electrónico',
            'Teléfono',
            'Presencial',
            'Chat en línea',
            'WhatsApp',
            'SMS',
            'Redes sociales',
            'Fax',
            'Videoconferencia',
            'Carta',
            'Aplicación móvil',
            'Telegram',
            'Instagram',
            'Twitter',
            'LinkedIn',
            'Skype',
            'Zoom',
            'Llamada telefónica',
            'Video llamada',
            'Correo postal',
        ];

        foreach ($canalesComunicacion as $canal) {
            canalcomunicacion::create([
                'Descripcion' => $canal,
                'Status' => rand(0, 1),
            ]);

        }
    }
}
