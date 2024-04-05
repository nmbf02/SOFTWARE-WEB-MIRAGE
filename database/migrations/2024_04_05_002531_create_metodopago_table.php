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
        Schema::create('metodopago', function (Blueprint $table) {
            $table->integer('IdMetodoPago', true)->comment('Identificador único para cada método de pago registrado en el sistema.');
            $table->text('Nombre')->comment(' Nombre o descripción del método de pago, como "Efectivo", "Tarjeta de crédito", "Transferencia bancaria", "Cheque", "Pago en línea", etc.');
            $table->text('Descripcion')->nullable()->comment('Información adicional sobre el método de pago, que puede incluir detalles sobre el proceso de pago, restricciones, o cualquier otro dato relevante.');
            $table->boolean('Status')->default(false)->comment('Indica si el método de pago está activo (1) o inactivo (0).');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('metodopago');
    }
};
