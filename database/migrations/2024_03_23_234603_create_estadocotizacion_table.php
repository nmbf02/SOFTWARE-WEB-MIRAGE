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
        Schema::create('estadocotizacion', function (Blueprint $table) {
            $table->integer('IdEstadoCotizacion', true)->comment('Identificador único para cada estado de cotización posible en el sistema.');
            $table->text('Descripcion')->comment('Descripción o nombre del estado de la cotización, como "Enviada", "Pendiente de Aprobación", "Aprobada", "Rechazada", "Cancelada", etc.');
            $table->boolean('Status')->default(false)->comment('Indica si el estado de cotización está activo (1) o inactivo (0). Esto permite gestionar la relevancia de los distintos estados en el proceso de cotización.');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estadocotizacion');
    }
};
