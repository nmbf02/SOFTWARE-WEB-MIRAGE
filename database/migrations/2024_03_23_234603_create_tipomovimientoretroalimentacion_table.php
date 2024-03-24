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
        Schema::create('tipomovimientoretroalimentacion', function (Blueprint $table) {
            $table->integer('IdMovimientoRetroalimentacion', true)->comment('Identificador único para cada tipo de movimiento o acción resultante de la retroalimentación.');
            $table->text('Descripcion')->comment('Descripción o nombre del tipo de movimiento de retroalimentación, como "Acción Correctiva", "Reconocimiento", "Mejora de Procesos", "Capacitación Adicional", etc.');
            $table->boolean('Status')->default(false)->comment('Indica si el tipo de movimiento de retroalimentación está activo (1) o inactivo (0). ');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipomovimientoretroalimentacion');
    }
};
