<?php

namespace Database\Seeders;
use App\Models\metodopago;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class metodopagoSeeder extends Seeder
{
     /**
     * Lista de métodos de pago predefinidos.
     *
     * @var array
     */
    private $metodosPago = [
        [
            'Nombre' => 'Efectivo',
            'Descripcion' => 'Pago en efectivo al momento de la compra.'
        ],
        [
            'Nombre' => 'Tarjeta de crédito',
            'Descripcion' => 'Pago con tarjeta de crédito.'
        ],
        [
            'Nombre' => 'Transferencia bancaria',
            'Descripcion' => 'Pago a través de transferencia bancaria.'
        ],
        [
            'Nombre' => 'Cheque',
            'Descripcion' => 'Pago con cheque.'
        ],
        [
            'Nombre' => 'Financiamiento',
            'Descripcion' => 'Financiamiento ofrecido por la empresa.'
        ],
        // Agrega más métodos de pago si lo deseas
    ];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->metodosPago as $metodoPago) {
            metodopago::create([
                'Nombre' => $metodoPago['Nombre'],
                'Descripcion' => $metodoPago['Descripcion'],
                'Status' => 1 // Por defecto, todos los métodos de pago están activos
            ]);
        }
    }
}
