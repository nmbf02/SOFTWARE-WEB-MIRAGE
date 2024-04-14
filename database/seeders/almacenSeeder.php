<?php

namespace Database\Seeders;

use App\Models\almacen;
use Illuminate\Database\Seeder;

class almacenSeeder extends Seeder
{
    /**
     * Lista de descripciones predefinidas.
     *
     * @var array
     */
    private $descripciones = [
        'Almacén Principal',
        'Almacén de Repuestos',
        'Almacén de Herramientas',
        'Almacén de Vehículos Nuevos',
        'Almacén de Vehículos Usados',
        'Almacén de Documentos',
        'Almacén de Mercancías Generales',
        // Agrega más descripciones si lo deseas
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $numAlmacenes = 20; // Número de almacenes que deseas generar
        $descripcionesDisponibles = $this->descripciones; // Copia de la lista de descripciones

        // Generar almacenes aleatorios
        for ($i = 1; $i <= $numAlmacenes; $i++) {
            // Verificar si hay descripciones disponibles
            if (!empty($descripcionesDisponibles)) {
                $descripcionIndex = array_rand($descripcionesDisponibles); // Seleccionar un índice de descripción aleatorio
                $descripcion = $descripcionesDisponibles[$descripcionIndex]; // Obtener la descripción correspondiente al índice seleccionado

                // Crear un registro con la descripción seleccionada
                Almacen::create([
                    'IdAlmacen' => $i,
                    'IdSucursal' => $i,
                    'Descripcion' => $descripcion,
                    'Status' => rand(0, 1) // Generar un valor aleatorio para Status
                ]);

                // Eliminar la descripción seleccionada de la lista para que no se repita
                unset($descripcionesDisponibles[$descripcionIndex]);
            } else {
                // Si no hay descripciones disponibles, romper el bucle
                break;
            }
        }
    }
}
