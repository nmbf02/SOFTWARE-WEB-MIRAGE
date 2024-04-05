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
        Schema::create('acabadocolorvehiculos', function (Blueprint $table) {
            $table->integer('IdAcabadoColorVehiculo', true)->comment('Es el identificador único para cada acabado o color de vehículo en la tabla.');
            $table->text('Descripcion')->comment('Detalle descriptivo del acabado o color del vehículo.');
            $table->boolean('Status')->default(false)->comment('Indica el estado de la entrada, donde por lo general 1 se podría usar para indicar que un acabado está activo o disponible y 0 para indicar que está inactivo o no disponible.');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acabadocolorvehiculos');
    }
};
