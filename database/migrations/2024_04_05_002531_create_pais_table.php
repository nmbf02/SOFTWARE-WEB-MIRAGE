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
        Schema::create('pais', function (Blueprint $table) {
            $table->integer('IdPais', true)->comment('Identificador único para cada país registrado en el sistema.');
            $table->text('Descripcion')->comment('Nombre del país. Puede almacenar el nombre común del país utilizado en contextos internacionales.');
            $table->boolean('Status')->default(false)->comment('Indica si el país está activo (1) o inactivo (0) en el sistema.');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pais');
    }
};
