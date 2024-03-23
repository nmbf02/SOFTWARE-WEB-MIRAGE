<?php

namespace Database\Seeders;
use App\Models\pais;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class paisSeeder extends Seeder
{     /**
    * Lista de países comunes.
    *
    * @var array
    */
   private $paises = [
       'Republica Dominicana',
       'Estados Unidos',
       'Canadá',
       'México',
       'Brasil',
       'Argentina',
       'Colombia',
       'Chile',
       'Perú',
       'España',
       'Francia',
       'Alemania',
       'Italia',
       'Reino Unido',
       'Japón',
       'China',
       'India',
   ];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->paises as $pais) {
            Pais::create([
                'Descripcion' => $pais,
                'Status' => 1 // Por defecto, todos los países estarán activos
            ]);
        }
    }
}
