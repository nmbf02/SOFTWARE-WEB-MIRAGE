<?php

namespace Database\Seeders;
use App\Models\tipocontratoempleado;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class tipocontratoempleadoSeeder extends Seeder
{
      /**
     * Lista de tipos de contrato específicos para el proyecto del dealer.
     *
     * @var array
     */
    private $tiposContrato = [
        'Contrato de Vendedor',
        'Contrato de Mecánico',
        'Contrato de Gerente',
        'Contrato de Recepcionista',
        'Contrato de Financiero',
        'Contrato de Jefe de Servicio',
        'Contrato de Técnico',
        'Contrato de Asesor de Ventas',
        'Contrato de Almacenero',
        'Contrato de Administrativo',
        // Agrega más tipos de contrato según sea necesario
    ];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->tiposContrato as $tipo) {
            tipocontratoempleado::create([
                'Descripcion' => $tipo,
                'Status' => 1 // Se asume que todos los tipos de contrato están activos por defecto
            ]);
        }
    }
}
