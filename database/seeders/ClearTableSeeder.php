<?php

namespace Database\Seeders;
use App\Models\categorialicencia;
use App\Models\ciudadmodel;
use App\Models\aseguradoravehiculos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClearTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ciudadmodel::truncate();
    }
}
