<?php

namespace Database\Seeders;
use App\Models\formapago;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class formapagotaeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Lista de métodos de pago para un concesionario de vehículos
        $metodosPago = [
            'Efectivo',
            'Tarjeta de crédito',
            'Transferencia bancaria',
            'Cheque',
            'Pago en línea',
            'Financiamiento',
            // Agrega más métodos de pago según sea necesario
        ];

        foreach ($metodosPago as $metodo) {
            formapago::create([
                'Descripcion' => $metodo,
                'Status' => 1 // Por defecto, todos los métodos de pago estarán activos
            ]);
        }
    }
}
