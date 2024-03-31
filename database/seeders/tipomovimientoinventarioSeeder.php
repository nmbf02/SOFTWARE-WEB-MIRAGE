<?php

namespace Database\Seeders;
use App\Models\tipomovimientoinventario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class tipomovimientoinventarioSeeder extends Seeder
{  /**
    * Tipos de movimiento de inventario para un proyecto de dealer.
    *
    * @var array
    */
   private $tiposMovimiento = [
       'Compra',
       'Venta',
       'Devolución a Proveedor',
       'Devolución de Cliente',
       'Ajuste por Pérdida',
       'Ajuste por Ganancia',
       'Transferencia Interna',
       // Agrega más tipos de movimiento si es necesario
   ];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $id = 1; // Variable para el IdTipoMovimiento
        foreach ($this->tiposMovimiento as $tipoMovimiento) {
            TipoMovimientoInventario::create([
                'IdTipoMovimiento' => $id++,
                'Descripcion' => $tipoMovimiento,
                'Status' => 1 // Por defecto, todos los tipos de movimiento están activos
            ]);
        

        }
    }
}
