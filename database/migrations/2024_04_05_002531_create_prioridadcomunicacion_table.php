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
        Schema::create('prioridadcomunicacion', function (Blueprint $table) {
            $table->integer('IdPrioridadComunicacion', true)->comment('Identificador único para cada nivel de prioridad asignado a las comunicaciones en el sistema.');
            $table->text('Descripcion')->comment('Descripción o nombre del nivel de prioridad, como "Alta", "Media", "Baja". Esta descripción ayuda a los usuarios del sistema a entender rápidamente la importancia de la comunicación.');
            $table->boolean('Status')->default(false)->comment('Indica si el nivel de prioridad de comunicación está activo (1) o inactivo (0). ');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prioridadcomunicacion');
    }
};
