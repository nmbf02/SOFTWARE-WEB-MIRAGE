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
        Schema::create('estadosolicitud', function (Blueprint $table) {
            $table->integer('IdEstadoSolicitud', true)->comment('Identificador único para cada estado posible en el ciclo de vida de una solicitud de préstamo.');
            $table->text('Descripcion')->comment('Descripción o nombre del estado de la solicitud de préstamo, como "Pendiente de Revisión", "Aprobado", "Rechazado", "En Verificación", etc.');
            $table->boolean('Status')->default(false)->comment('Indica si el estado de la solicitud de préstamo está activo (1) o inactivo (0). ');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estadosolicitud');
    }
};
