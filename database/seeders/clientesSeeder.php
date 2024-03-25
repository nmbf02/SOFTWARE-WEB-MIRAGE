<?php
use App\Models\persona;
use App\Models\tipopersona;
use App\Models\categorialicencia;
use App\Models\condicionfactura;
namespace Database\Seeders;
use App\Models\clientesmodel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class clientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $numClientes = 20; // Número de clientes que deseas generar

        for ($i = 1; $i <= $numClientes; $i++) {
            $persona = Persona::create([...]); // Crear registro en tabla Persona
            $tipoPersona = TipoPersona::create([...]); // Crear registro en tabla TipoPersona
            $categoriaLicencia = CategoriaLicencia::create([...]); // Crear registro en tabla CategoriaLicencia
            $condicionFactura = CondicionFactura::create([...]); // Crear registro en tabla CondicionFactura

            clientesmodel::create([
                'IdPersona' => $persona->id,
                'IdTipoPersona' => $tipoPersona->id,
                'IdCategoriaLicencia' => $categoriaLicencia->id,
                'IdCondicionFactura' => $condicionFactura->id,
                'Status' => rand(0, 1) // Generar un status aleatorio (0 o 1)
            ]);
        }
    }   
}
