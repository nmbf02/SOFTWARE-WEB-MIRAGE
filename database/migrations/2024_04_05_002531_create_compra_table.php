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
        Schema::create('compra', function (Blueprint $table) {
            $table->integer('IdCompra', true)->comment('Identificador único para cada compra registrada en el sistema.');
            $table->integer('IdOrdenCompra')->nullable()->index('fk_compra_ordencompra')->comment('Clave foránea que referencia a la tabla OrdenCompra, en caso de que la compra esté asociada con una orden de compra ');
            $table->integer('IdSuplidor')->index('fk_compra_suplidor')->comment('Clave foránea que vincula la compra con el suplidor (proveedor) de donde se adquirieron los bienes o servicios.');
            $table->date('FechaCompra')->comment('Fecha en que se realizó la compra.');
            $table->decimal('DescuentoCompra', 18)->nullable()->comment('Descuento aplicado a la compra.');
            $table->decimal('TotalCompra', 18)->comment('Monto total de la compra después de aplicar cualquier descuento.');
            $table->integer('IdMoneda')->index('fk_compra_moneda')->comment('Clave foránea que referencia a la tabla Moneda, indicando la moneda en que se efectuó la compra.');
            $table->integer('IdMetodoPago')->index('fk_compra_metodopago')->comment('Clave foránea que referencia a la tabla MetodoPago, señalando el método de pago utilizado para la compra.');
            $table->integer('IdEstadoCompra')->index('fk_compra_estadocompra')->comment('Clave foránea que referencia a la tabla EstadoCompra, indicando el estado actual de la compra (por ejemplo, completada, pendiente, cancelada).');
            $table->integer('IdUsuario')->index('fk_compra_usuario')->comment('Clave foránea que asocia la compra con el usuario que la registró en el sistema.');
            $table->text('Referencia')->nullable()->comment('Número de referencia o cualquier otro identificador externo asociado con la compra.');
            $table->date('FechaRecepcion')->nullable()->comment('Fecha en que se recibieron los bienes o servicios comprados.');
            $table->text('Observacion')->nullable()->comment('Notas o comentarios adicionales sobre la compra.');
            $table->boolean('Status')->default(false)->comment('Indica si la compra está activa (1) o inactiva (0) dentro del sistema.');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compra');
    }
};
