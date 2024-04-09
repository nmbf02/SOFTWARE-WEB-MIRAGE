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
        Schema::create('tiporiesgo', function (Blueprint $table) {
            $table->integer('IdTipoRiesgo', true)->comment('Identificador único para cada tipo de riesgo registrado en el sistema.');
            $table->text('Descripcion')->comment('Descripción o nombre del tipo de riesgo. Este campo proporciona una explicación detallada sobre la naturaleza del riesgo, como "Bajo", "Moderado", "Alto", "Riesgo de Incendio", "Riesgo de Robo", etc.');
            $table->boolean('Status')->default(false)->comment('Indica si el tipo de riesgo está activo (1) o inactivo (0). ');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tiporiesgo');
    }
};
