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
        Schema::create('detalleinventario', function (Blueprint $table) {
            $table->integer('IdInventario')->index('fk_detalleinventario_inventario')->comment('Clave foránea que referencia al registro principal de inventario. Identifica a qué inventario pertenece cada detalle.');
            $table->integer('IdVehiculo')->index('fk_detalleinventario_vehiculo')->comment('Clave foránea que referencia al producto específico (en este caso, vehículos) que se está inventariando.');
            $table->text('DescripcionProducto')->comment('Descripción detallada del producto o ítem específico en inventario.');
            $table->integer('CantidadDisponible')->comment('Cantidad actual del producto disponible en el inventario.');
            $table->decimal('CostoProducto', 18)->comment('Costo unitario del producto. Esencial para calcular el valor total del inventario.');
            $table->text('Lote')->nullable()->comment('Identificador del lote al cual pertenece el producto, útil para seguimiento de caducidades o versiones.');
            $table->boolean('Status')->comment('Indica si el detalle del inventario está activo (1) o inactivo (0).');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalleinventario');
    }
};
