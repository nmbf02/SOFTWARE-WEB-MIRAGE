<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipomovimientoinventario', function (Blueprint $table) {
            $table->integer('IdTipoMovimiento')->primary()->comment('Identificador único para cada tipo de movimiento de inventario registrado en el sistema.');
            $table->text('Descripcion')->comment('Descripción o nombre del tipo de movimiento de inventario. Ejemplos comunes incluyen "Compra", "Venta", "Devolución a Proveedor", "Devolución de Cliente", "Ajuste por Pérdida", "Ajuste por Ganancia", "Transferencia Interna", entre otros.');
            $table->boolean('Status')->default(false)->comment('Indica si el tipo de movimiento de inventario está activo (1) o inactivo (0).');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipomovimientoinventario');
    }
};
