<?php

namespace Database\Seeders;

use App\Models\aseguradoravehiculos;
use Illuminate\Database\Seeder;

class aseguradoravehiculosS extends Seeder
{
    /**
     * Lista de nombres de aseguradoras de vehículos en República Dominicana.
     *
     * @var array
     */
    private $nombresAseguradoras = [
        'ARS Palic Salud',
        'ARS Universal',
        'ARS Senasa',
        'ARS Monumental',
        'ARS Humano',
        'ARS Simag',
        'Seguros Reservas',
        'Seguros Banreservas',
        'Seguros Universal',
        'Seguros Pepín',
        'Seguros Mapfre BHD',
        'Seguros Constitución',
        'Seguros Sura',
        'Seguros Baninter',
        'Seguros Banesco',
        'Seguros AGS',
        'Seguros Suramericana',
        'Seguros La Colonial',
        'Seguros Pepín',
        'Seguros Banica',
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->nombresAseguradoras as $key => $nombre) {
            aseguradoravehiculos::create([
                'Nombre' => $nombre,
                'IdSector' => rand(1, 10), // Genera un valor aleatorio para el IdSector
                'Calle' => 'Calle ' . ($key + 1), // Agrega números a las calles
                'NumeroEdificio' => 'Edificio ' . ($key + 1), // Agrega números a los edificios
                'Telefono' => $this->generatePhoneNumber(), // Genera un número de teléfono aleatorio
                'Email' => strtolower(str_replace(' ', '', $nombre)) . '@gmail.com', // Genera el correo con el nombre de la aseguradora y @gmail.com
                'Status' => rand(0, 1) // Genera un valor aleatorio para Status
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
        $phoneNumber = '809'; // Prefijo telefónico de República Dominicana

        for ($i = 0; $i < 7; $i++) {
            $phoneNumber .= rand(0, 9); // Genera números aleatorios para el resto del número de teléfono
        }

        return $phoneNumber;
    }
}
