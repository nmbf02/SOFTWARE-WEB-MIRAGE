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
        Schema::create('banco', function (Blueprint $table) {
            $table->integer('IdBanco', true)->comment('El identificador único para cada banco en la tabla.');
            $table->text('Descripcion')->comment('Descripción o nombre del banco.');
            $table->integer('IdSector')->index('fk_banco_sector')->comment('Clave foránea que referencia al sector en el que se encuentra el banco.');
            $table->text('Telefono')->comment('Número de teléfono de contacto del banco.');
            $table->text('Email')->comment('Dirección de correo electrónico de contacto del banco.');
            $table->boolean('Status')->default(false)->comment('Indicador del estado del banco en el sistema, donde 1 podría significar activo y 0 inactivo.');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('banco');
    }
};
