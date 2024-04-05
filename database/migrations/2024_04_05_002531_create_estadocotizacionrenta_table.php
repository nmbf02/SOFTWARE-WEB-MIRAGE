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
        Schema::create('estadocotizacionrenta', function (Blueprint $table) {
            $table->integer('IdEstadoCotizacionRenta', true)->comment('Identificador único para cada estado posible de una cotización de renta. Este campo sirve como clave primaria de la tabla.');
            $table->text('Descripcion')->comment('Descripción o nombre del estado de la cotización de renta, como "Pendiente", "Aprobada", "Rechazada", "Cancelada", etc. Esta descripción proporciona una comprensión clara del estado actual de la cotización.');
            $table->boolean('Status')->default(false)->comment('Indica si el estado de la cotización de renta está activo (1) o inactivo (0).');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estadocotizacionrenta');
    }
};
