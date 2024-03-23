<?php

namespace Database\Seeders;
use App\Models\abonoprestamovehiculos;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class abonoprestamovehiculosSeeder extends Seeder
{
    /**
     * Array de mensajes para las notas.
     *
     * @var array
     */
    private $mensajes = [
        'Pago recibido correctamente.',
        'Se aplicó un descuento por pronto pago.',
        'Mora generada por pago tardío.',
        'Se anuló el cargo por mora.',
        'Abono parcial realizado.',
        'Se aplicó un descuento adicional.',
        'Monto recibido en efectivo.',
        'Pago realizado vía transferencia bancaria.',
        // Agrega más mensajes según sea necesario
    ];
    
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $numMensajes = count($this->mensajes);
        
        for ($i = 1; $i <= 20; $i++) {
            $indiceMensaje = ($i - 1) % $numMensajes; // Calcular el índice del mensaje
            $mensaje = $this->mensajes[$indiceMensaje]; // Seleccionar el mensaje
            
            abonoprestamovehiculos::create([
                'IdTipoAbonoPrestamo' => rand(1, 20),
                'IdVenta' => rand(1, 20),
                'FechaPago' => now()->subDays(rand(1, 365)),
                'Monto' => rand(50, 500),
                'CargoPorMora' => rand(0, 50),
                'NotaAbonoPrestamoVehiculo' => $mensaje, // Seleccionar el mensaje correspondiente
                'IdPorcentajeMora' => rand(1, 20),
                'Status' => rand(0, 1),
            ]);
        }
    }
}

