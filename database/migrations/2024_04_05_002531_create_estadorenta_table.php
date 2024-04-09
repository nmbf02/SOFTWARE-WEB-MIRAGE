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
        Schema::create('estadorenta', function (Blueprint $table) {
            $table->integer('IdEstadoRenta', true)->comment('Identificador único para cada estado de renta posible. Este campo sirve como la clave primaria de la tabla.');
            $table->text('Descripcion')->comment('Nombre o descripción del estado de la renta, como "Reservada", "Activa", "Finalizada", "Cancelada", etc. ');
            $table->boolean('Status')->default(false)->comment('Indica si el estado de la renta está activo (1) o inactivo (0). ');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estadorenta');
    }
};
