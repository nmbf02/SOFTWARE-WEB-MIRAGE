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
        Schema::create('estadosubasta', function (Blueprint $table) {
            $table->integer('IdEstadoSubasta', true)->comment('Identificador único para cada estado posible de una subasta. Este campo sirve como la clave primaria de la tabla.');
            $table->text('Descripcion')->comment(' Nombre o descripción del estado de la subasta, como "Activa", "Pendiente", "Finalizada", "Cancelada", etc. Esta descripción proporciona una comprensión clara del estado actual de la subasta.');
            $table->boolean('Status')->default(false)->comment('Indica si el estado de la subasta está activo (1) o inactivo (0).');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estadosubasta');
    }
};
