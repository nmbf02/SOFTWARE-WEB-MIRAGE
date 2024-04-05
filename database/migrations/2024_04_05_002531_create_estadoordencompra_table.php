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
        Schema::create('estadoordencompra', function (Blueprint $table) {
            $table->integer('IdEstadoOrdenCompra', true)->comment(' Identificador único para cada estado posible de una orden de compra.');
            $table->text('Descripcion')->comment('Nombre o descripción del estado de la orden de compra, como "Pendiente de Aprobación", "Aprobada", "Rechazada", "Enviada", "Recibida", "Cancelada", etc.');
            $table->boolean('Status')->default(false)->comment('Indica si el estado de la orden de compra está activo (1) o inactivo (0). ');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estadoordencompra');
    }
};
