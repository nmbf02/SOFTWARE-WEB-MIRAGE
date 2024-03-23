<?php

namespace Database\Seeders;
use App\Models\tipodocumentopersona;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class tipodocumentopersonaSeeder extends Seeder
{
   /**
     * Tipos de documentos predefinidos para el seeder.
     *
     * @var array
     */
    private $tiposDocumentos = [
        ['Nombre' => 'DNI', 'Descripcion' => 'Documento Nacional de Identidad'],
        ['Nombre' => 'Pasaporte', 'Descripcion' => 'Pasaporte'],
        ['Nombre' => 'Licencia de Conducir', 'Descripcion' => 'Licencia de Conducir'],
        ['Nombre' => 'Cédula de Identidad', 'Descripcion' => 'Cédula de Identidad'],
        ['Nombre' => 'Seguro Social', 'Descripcion' => 'Seguro Social'],
        // Puedes agregar más tipos de documentos según sea necesario
    ];

     /*Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->tiposDocumentos as $tipoDocumento) {
            tipodocumentopersona::create([
                'Nombre' => $tipoDocumento['Nombre'],
                'Descripcion' => $tipoDocumento['Descripcion'],
                'Status' => 1 // Por defecto, establecemos todos los tipos de documento como activos
            ]);
        }
    }
}
