<?php

namespace Database\Seeders;
use App\Models\tipocotizacionrenta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class tipocotizacionrentaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Renta Diaria Estándar
         TipoCotizacionRenta::create([
            'Nombre' => 'Renta Diaria Estándar',
            'Descripcion' => 'Renta de vehículos estándar por día.',
            'PrecioBase' => 2500.00, // Precio base en pesos dominicanos (RD$)
            'KilometrajeIncluido' => 150, // Kilómetros incluidos
            'CostoKilometroAdicional' => 12.00, // Costo por kilómetro adicional
            'SeguroIncluido' => 1, // Seguro incluido (1) o no (0)
            'DepositoSeguridad' => 6000.00, // Depósito de seguridad
            'Status' => 1 // Activo
        ]);

        // Renta Mensual Compacto
        TipoCotizacionRenta::create([
            'Nombre' => 'Renta Mensual Compacto',
            'Descripcion' => 'Renta de vehículos compactos por mes.',
            'PrecioBase' => 18000.00, // Precio base en pesos dominicanos (RD$)
            'KilometrajeIncluido' => 2000, // Kilómetros incluidos
            'CostoKilometroAdicional' => 8.00, // Costo por kilómetro adicional
            'SeguroIncluido' => 1, // Seguro incluido (1) o no (0)
            'DepositoSeguridad' => 12000.00, // Depósito de seguridad
            'Status' => 1 // Activo
        ]);

        // Renta Fin de Semana Lujo
        TipoCotizacionRenta::create([
            'Nombre' => 'Renta Fin de Semana Lujo',
            'Descripcion' => 'Renta de vehículos de lujo por fin de semana.',
            'PrecioBase' => 10000.00, // Precio base en pesos dominicanos (RD$)
            'KilometrajeIncluido' => 300, // Kilómetros incluidos
            'CostoKilometroAdicional' => 20.00, // Costo por kilómetro adicional
            'SeguroIncluido' => 1, // Seguro incluido (1) o no (0)
            'DepositoSeguridad' => 8000.00, // Depósito de seguridad
            'Status' => 1 // Activo
        ]);

        TipoCotizacionRenta::create([
            'Nombre' => 'Renta Diaria Económica',
            'Descripcion' => 'Renta de vehículos económicos por día.',
            'PrecioBase' => 2000.00, // Precio base en pesos dominicanos (RD$)
            'KilometrajeIncluido' => 100, // Kilómetros incluidos
            'CostoKilometroAdicional' => 10.00, // Costo por kilómetro adicional
            'SeguroIncluido' => 1, // Seguro incluido (1) o no (0)
            'DepositoSeguridad' => 5000.00, // Depósito de seguridad
            'Status' => 1 // Activo
        ]);

        TipoCotizacionRenta::create([
            'Nombre' => 'Renta Semanal SUV',
            'Descripcion' => 'Renta de vehículos SUV por una semana.',
            'PrecioBase' => 12000.00, // Precio base en pesos dominicanos (RD$)
            'KilometrajeIncluido' => 500, // Kilómetros incluidos
            'CostoKilometroAdicional' => 15.00, // Costo por kilómetro adicional
            'SeguroIncluido' => 1, // Seguro incluido (1) o no (0)
            'DepositoSeguridad' => 10000.00, // Depósito de seguridad
            'Status' => 1 // Activo
        ]);
    }
}
