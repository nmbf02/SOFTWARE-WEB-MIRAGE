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
        Schema::create('porcentajemora', function (Blueprint $table) {
            $table->integer('IDPorcentajeMora', true)->comment('Identificador único para cada tasa de porcentaje de mora en el sistema.');
            $table->text('Descripcion')->comment('Descripción o nombre que identifica la tasa de mora, por ejemplo, basada en el rango de días de atraso.');
            $table->decimal('Porcentaje', 5)->comment('El porcentaje de mora que se aplica sobre el monto adeudado.');
            $table->integer('DesdeDiasRetraso')->comment('El número mínimo de días de retraso para aplicar esta tasa de mora.');
            $table->integer('HastaDiasRetraso')->comment('El número máximo de días de retraso hasta el cual es aplicable esta tasa de mora.');
            $table->boolean('AplicableSobreCuota')->comment('Indica si el porcentaje de mora se aplica sobre cada cuota atrasada (1) o no (0).');
            $table->boolean('AplicableSobreTotalAdeudado')->comment('Indica si el porcentaje de mora se aplica sobre el total adeudado (1) o no (0).');
            $table->integer('IdTipoPorcentaje')->index('fk_porcentajesmora_tipoporcentajemora')->comment('Clave foránea que referencia a una tabla TipoPorcentaje, la cual puede detallar diferentes categorías o condiciones bajo las cuales se aplican estos porcentajes.');
            $table->boolean('Status')->default(false)->comment('Indica si la tasa de mora está activa (1) o inactiva (0).');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('porcentajemora');
    }
};
