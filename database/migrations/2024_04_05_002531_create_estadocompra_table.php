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
        Schema::create('estadocompra', function (Blueprint $table) {
            $table->integer('IdEstadoCompra')->primary()->comment('Identificador único para cada estado posible de una compra. Este ID es utilizado para referenciar de manera única cada estado en el sistema.');
            $table->text('Descripcion')->comment('Descripción o nombre del estado de compra, como "Pendiente", "Aprobada", "Cancelada", "Completada", etc. Este campo detalla el estado actual de la compra de manera legible para los usuarios.');
            $table->boolean('Status')->default(false)->comment('Indica si el estado de compra está activo (1) o inactivo (0). ');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estadocompra');
    }
};
