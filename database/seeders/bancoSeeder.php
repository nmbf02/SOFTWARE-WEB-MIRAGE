<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\banco;

class bancoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $banco = [
            'Banco Popular Dominicano',
            'Banco de Reservas',
            'Banco BHD León',
            'Banco Santa Cruz',
            'Banco Ademi',
            'Banco López de Haro',
            'Banco Vimenca',
            'Banco Agrícola de la República Dominicana',
            'Banco Caribe',
            'Banco del Progreso',
            'Banco Promerica',
            'Banco BDI',
            'Banco Banac',
            'Banco Confisa',
            'Banco Banesco',
            'Banco BDA',
            'Banco ADEMI',
            'Banco ADOPEM',
            'Banco López de Haro', // Este parece repetido en la lista original
        ];

        foreach ($banco as $nombre) {
            banco::create([
                'Descripcion' => $nombre,
                'Telefono' => $this->generatePhoneNumber(),
                'IdSector' => rand(1, 20),
                'Email' => strtolower(str_replace(' ', '_', $nombre)) . '@gmail.com',
                'Status' => 1,
            ]);
        }
    }

    /**
     * Genera un número de teléfono aleatorio.
     *
     * @return string
     */
    private function generatePhoneNumber(): string
    {
        $tnum = '809'; // Prefijo telefónico de República Dominicana

        for ($i = 0; $i < 7; $i++) {
            $tnum .= rand(0, 9); // Genera números aleatorios para el resto del número de teléfono
        }

        return $tnum;
    }
}
