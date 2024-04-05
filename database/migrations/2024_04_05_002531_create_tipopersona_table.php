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
        Schema::create('tipopersona', function (Blueprint $table) {
            $table->integer('IdTipoPersona', true)->comment('Identificador único para cada categoría de tipo de persona definida en el sistema.');
            $table->text('Descripcion')->comment('Descripción o nombre del tipo de persona. Este campo especifica la categoría, como "Cliente", "Empleado", "Proveedor", "Socio", etc., facilitando la clasificación de las personas según su relación o función dentro de la organización.');
            $table->boolean('Status')->default(false)->comment('Indica si el tipo de persona está activo (1) o inactivo (0). ');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipopersona');
    }
};
