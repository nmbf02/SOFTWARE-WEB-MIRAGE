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
        Schema::create('cargoempleado', function (Blueprint $table) {
            $table->integer('IdCargoEmpleado', true)->comment('Identificador único para cada cargo registrado en la tabla.');
            $table->text('Descripcion')->comment('Descripción o nombre del cargo del empleado.');
            $table->boolean('Status')->default(false)->comment('Indica si el cargo está activo (1) o inactivo (0).');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cargoempleado');
    }
};
