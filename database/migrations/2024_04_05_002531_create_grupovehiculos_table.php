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
        Schema::create('grupovehiculos', function (Blueprint $table) {
            $table->integer('IdGrupoVehiculo', true)->comment('Identificador único para cada grupo de vehículos en el sistema.');
            $table->text('Descripcion')->comment('Descripción o nombre del grupo de vehículos. Este campo proporciona información sobre las características que definen el grupo, como "SUV", "Compactos", "De lujo", "Comerciales", etc.');
            $table->boolean('Status')->default(false)->comment('Indica si el grupo de vehículos está activo (1) o inactivo (0).');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grupovehiculos');
    }
};
