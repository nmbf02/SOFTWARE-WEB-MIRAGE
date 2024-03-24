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
        Schema::create('pagocompra', function (Blueprint $table) {
            $table->integer('IdPagoCompra', true)->comment('egistrar los pagos realizados por las compras de productos o servicios.');
            $table->integer('IdCompra')->index('fk_pagocompra_compra')->comment('Clave foránea que referencia a la compra asociada con el pago. Este campo vincula el pago específicamente con un registro de compra en la tabla Compra.');
            $table->date('FechaPago')->comment('Fecha en la que se realizó el pago.');
            $table->decimal('Monto', 18)->comment('Monto total del pago realizado hacia la compra.');
            $table->integer('IdMetodoPago')->index('fk_pagocompra_metodopago')->comment('Clave foránea que referencia al método de pago utilizado (por ejemplo, efectivo, transferencia bancaria, tarjeta de crédito). Se vincula con una tabla MetodoPago donde se detallan estos métodos.');
            $table->text('Notas')->nullable()->comment('Campo opcional para añadir notas adicionales sobre el pago, como detalles de la transferencia, confirmación de recepción, entre otros.');
            $table->boolean('Status')->default(false)->comment('Indica si el registro del pago está activo (1) o inactivo (0). ');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pagocompra');
    }
};
