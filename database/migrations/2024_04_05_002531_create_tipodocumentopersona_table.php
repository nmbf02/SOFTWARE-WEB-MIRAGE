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
        Schema::create('tipodocumentopersona', function (Blueprint $table) {
            $table->integer('IdTipoDocumentoPersona', true)->comment('Identificador único para cada tipo de documento que una persona puede poseer o requerir en la organización.');
            $table->text('Nombre')->comment('Nombre del tipo de documento, como "DNI" (Documento Nacional de Identidad), "Pasaporte", "Licencia de Conducir", "Cédula de Identidad", "Seguro Social", etc.');
            $table->text('Descripcion')->comment('Descripción detallada o propósito del tipo de documento, proporcionando información adicional sobre su uso o importancia.');
            $table->boolean('Status')->default(false)->comment('Indica si el tipo de documento está activo (1) o inactivo (0).');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipodocumentopersona');
    }
};
