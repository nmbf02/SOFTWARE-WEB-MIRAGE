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
        Schema::create('tipoempleado', function (Blueprint $table) {
            $table->integer('IdTipoEmpleado', true)->comment('Identificador único para cada categoría o tipo de empleado definido por la organización.');
            $table->text('Descripcion')->comment('Descripción o nombre del tipo de empleado, como "Permanente", "Temporal", "Contratista", "Gerencial", "Operativo", etc. Esta clasificación puede reflejar la naturaleza del contrato de trabajo, el nivel de responsabilidad, o la función dentro de la empresa.');
            $table->boolean('Status')->default(false)->comment('Indica si el tipo de empleado está activo (1) o inactivo (0). ');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipoempleado');
    }
};
