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
        Schema::create('tipodeducciones', function (Blueprint $table) {
            $table->integer('IdTipoDeduccion', true)->comment('Identificador único para cada tipo de deducción definido en el sistema.');
            $table->text('Descripcion')->comment('Descripción o nombre del tipo de deducción, como "Impuesto sobre la Renta", "Seguridad Social", "Cuota Sindical", "Préstamo Personal", "Seguro Médico".');
            $table->boolean('Status')->default(false)->comment('Indica si el tipo de deducción está activo (1) o inactivo (0). ');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipodeducciones');
    }
};
