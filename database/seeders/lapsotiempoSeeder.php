<?php

namespace Database\Seeders;
use App\Models\lapsotiempo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class lapsotiempoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lapsosTiempo = [
            '6 meses',
            '1 año',
            '2 años',
            '3 años',
            '5 años',
            // Agrega más lapsos de tiempo según tus necesidades
        ];

        foreach ($lapsosTiempo as $lapso) {
            LapsoTiempo::create([
                'Descripcion' => $lapso,
                'Status' => 1
            ]);
        }
    }
}
