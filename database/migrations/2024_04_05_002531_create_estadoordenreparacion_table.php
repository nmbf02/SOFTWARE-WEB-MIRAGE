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
        Schema::create('estadoordenreparacion', function (Blueprint $table) {
            $table->integer('IdEstadoOrdenReparacion', true)->comment('Identificador único para cada estado posible de una orden de reparación.');
            $table->text('Descripcion')->comment('Nombre o descripción del estado de la orden de reparación, como "Pendiente", "En Proceso", "Completada", "En Espera de Piezas", "Cancelada", etc.');
            $table->boolean('Status')->default(false)->comment('Indica si el estado de la orden de reparación está activo (1) o inactivo (0).');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estadoordenreparacion');
    }
};
