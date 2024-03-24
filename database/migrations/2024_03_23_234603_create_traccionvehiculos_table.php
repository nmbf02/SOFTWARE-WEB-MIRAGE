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
        Schema::create('traccionvehiculos', function (Blueprint $table) {
            $table->integer('IdTraccionVehiculo', true)->comment('Identificador único para cada tipo de tracción listado en el sistema.');
            $table->text('Descripcion')->comment('Descripción o nombre del tipo de tracción del vehículo. Este campo ayuda a especificar si el vehículo es de tracción delantera, tracción trasera, tracción integral, entre otros.');
            $table->boolean('Status')->default(false)->comment('Indica si el tipo de tracción está activo (1) o inactivo (0).');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('traccionvehiculos');
    }
};
