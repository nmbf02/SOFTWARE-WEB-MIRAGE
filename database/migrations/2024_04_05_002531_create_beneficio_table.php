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
        Schema::create('beneficio', function (Blueprint $table) {
            $table->integer('IdBeneficio', true)->comment('Es el identificador único de cada beneficio listado en la tabla.');
            $table->text('Descripcion')->comment('Descripción detallada del beneficio.');
            $table->boolean('Status')->default(false)->comment('Estado del beneficio, donde 1 indica que el beneficio está activo y 0 que está inactivo.');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('beneficio');
    }
};
