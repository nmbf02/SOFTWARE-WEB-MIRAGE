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
        Schema::create('tipomantenimiento', function (Blueprint $table) {
            $table->integer('IdTipoMantenimiento', true)->comment('Identificador único para cada tipo de mantenimiento registrado en el sistema.');
            $table->text('Descripcion')->comment('Descripción o nombre del tipo de mantenimiento, como "Mantenimiento Preventivo", "Mantenimiento Correctivo", "Inspección", "Limpieza", etc.');
            $table->integer('IdFrecuenciaMantenimiento')->index('fk_tipomantenimiento_frecuenciamantenimiento')->comment('Clave foránea que referencia a la tabla FrecuenciaMantenimiento, indicando la frecuencia con la que debe realizarse este tipo de mantenimiento (por ejemplo, diario, semanal, mensual, anual).');
            $table->boolean('Status')->default(false)->comment('Indica si el tipo de mantenimiento está activo (1) o inactivo (0). ');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipomantenimiento');
    }
};
