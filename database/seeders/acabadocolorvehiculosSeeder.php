<?php

namespace Database\Seeders;

use App\Models\acabadocolorvehiculos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class acabadocolorvehiculosSeeder extends Seeder
{
    /**
     * Lista de colores predefinidos.
     *
     * @var array
     */
    private $colores = [
        'Rojo',
        'Azul',
        'Verde',
        'Amarillo',
        'Negro',
        'Blanco',
        'Gris',
        'Naranja',
        'Morado',
        'Rosado',
        // Agrega más colores si lo deseas
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {  
        // Mezclar aleatoriamente el arreglo de colores
        shuffle($this->colores);
        
        // Utilizar una copia del arreglo de colores mezclado
        $coloresDisponibles = $this->colores;
        
        for ($i = 0; $i < min(20, count($coloresDisponibles)); $i++) {
            // Seleccionar el color actual
            $color = $coloresDisponibles[$i];
            
            // Crear un registro con el color seleccionado
            acabadocolorvehiculos::create([
                'Descripcion' => $color,
                'Status' => rand(0, 1) // Generar un valor aleatorio para Status
            ]);
            
            // Eliminar el color seleccionado de la lista para que no se repita
            unset($coloresDisponibles[$i]);
        }
    }
}
