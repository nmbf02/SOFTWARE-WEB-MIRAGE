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
        Schema::create('tipocontratoempleado', function (Blueprint $table) {
            $table->integer('IdTipoContratoEmpleado', true)->comment('Identificador único para cada tipo de contrato de empleado registrado en el sistema.');
            $table->text('Descripcion')->comment('Descripción o nombre del tipo de contrato, como "Contrato Indefinido", "Contrato Temporal", "Contrato por Proyecto", "Contrato de Practicas", etc.');
            $table->boolean('Status')->default(false)->comment('Indica si el tipo de contrato está activo (1) o inactivo (0). ');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipocontratoempleado');
    }
};
