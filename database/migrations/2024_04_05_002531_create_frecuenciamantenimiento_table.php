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
        Schema::create('frecuenciamantenimiento', function (Blueprint $table) {
            $table->integer('IdFrecuenciaMantenimiento', true)->comment('Identificador único para cada intervalo de frecuencia de mantenimiento definido en el sistema.');
            $table->text('Descripcion')->comment('Descripción detallada o nombre del intervalo de frecuencia, como "Cada 5000 km", "Anual", "Semestral", "Cada 100 horas de uso", etc. Esto proporciona una guía clara sobre cuándo se debe realizar el mantenimiento.');
            $table->boolean('Status')->default(false)->comment('Indica si la frecuencia de mantenimiento está activa (1) o inactiva (0). ');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('frecuenciamantenimiento');
    }
};
