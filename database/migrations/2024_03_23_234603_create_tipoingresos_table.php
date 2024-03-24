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
        Schema::create('tipoingresos', function (Blueprint $table) {
            $table->integer('IdTipoIngreso', true)->comment('Identificador único para cada tipo de ingreso registrado en el sistema.');
            $table->text('Descripcion')->comment('Descripción o nombre del tipo de ingreso, como "Salario", "Bonificación", "Comisión", "Ingresos por Inversiones", "Regalías", etc.');
            $table->boolean('Status')->default(false)->comment('Indica si el tipo de ingreso está activo (1) o inactivo (0).');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipoingresos');
    }
};
