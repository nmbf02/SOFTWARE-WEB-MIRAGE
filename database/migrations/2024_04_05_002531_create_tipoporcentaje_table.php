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
        Schema::create('tipoporcentaje', function (Blueprint $table) {
            $table->integer('IdTipoPorcentaje', true)->comment('Identificador único para cada tipo de porcentaje registrado en el sistema.');
            $table->text('Nombre')->comment('Nombre descriptivo del tipo de porcentaje, como "Interés Préstamo", "Tasa de Mora", "Depreciación Anual", etc.');
            $table->text('Descripcion')->nullable()->comment('Descripción adicional que proporciona más detalles sobre el tipo de porcentaje, su uso o condiciones aplicables.');
            $table->integer('RangoDias')->comment('Especifica el rango de días al que se aplica el porcentaje, útil para calcular intereses de mora o penalizaciones.');
            $table->decimal('Porcentaje', 5)->comment('Valor del porcentaje asociado al tipo. Puede representar una tasa de interés, un porcentaje de depreciación, entre otros.');
            $table->decimal('IncrementoAnual', 5)->nullable()->comment('En el caso de tasas o porcentajes que varían anualmente, este campo puede indicar el incremento anual aplicable.');
            $table->boolean('Status')->default(false)->comment('Indica si el tipo de porcentaje está activo (1) o inactivo (0). ');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipoporcentaje');
    }
};
