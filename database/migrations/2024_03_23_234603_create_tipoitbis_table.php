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
        Schema::create('tipoitbis', function (Blueprint $table) {
            $table->integer('IdTipoItbis', true)->comment('Identificador único para cada tasa de ITBIS registrada en el sistema.');
            $table->text('Nombre')->comment('Nombre o descripción breve de la tasa de ITBIS, como "ITBIS General", "ITBIS Reducido", "Exento de ITBIS", entre otros.');
            $table->text('Descripcion')->nullable()->comment('Descripción detallada del tipo de ITBIS, incluyendo en qué casos se aplica o cualquier particularidad relevante.');
            $table->decimal('Porcentaje', 5)->comment('El porcentaje que representa la tasa del ITBIS. Por ejemplo, 18% para el ITBIS general, 0% para productos o servicios exentos, etc.');
            $table->boolean('Status')->default(false)->comment('Indica si la tasa de ITBIS está activa (1) o inactiva (0). ');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipoitbis');
    }
};
