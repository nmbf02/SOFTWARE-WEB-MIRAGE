<?php

namespace Database\Seeders;
use App\Models\beneficioempleado;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class beneficioempleadoS extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 20; $i++) {
            BeneficioEmpleado::create([
                'IdEmpleado' => $i,
                'IdBeneficio' => $i,
                'Status' => rand(0, 1),
            ]);

        }
    }
}
