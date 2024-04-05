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
        Schema::create('tiponominaempleado', function (Blueprint $table) {
            $table->integer('IdTipoNomina', true)->comment('Identificador único para cada tipo de nómina establecido en la empresa.');
            $table->text('Descripcion')->comment('Descripción o nombre del tipo de nómina, como "Nómina Mensual", "Nómina Quincenal", "Nómina de Directivos", etc. Este campo explica claramente la categoría de la nómina.');
            $table->integer('Dias')->comment('Número de días que cubre el periodo de pago para este tipo de nómina. Por ejemplo, 30 para una nómina mensual, 15 para una nómina quincenal, etc.');
            $table->boolean('Status')->default(false)->comment('Indica si el tipo de nómina está activo (1) o inactivo (0). ');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tiponominaempleado');
    }
};
