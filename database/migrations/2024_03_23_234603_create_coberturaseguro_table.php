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
        Schema::create('coberturaseguro', function (Blueprint $table) {
            $table->integer('IdCoberturaSeguro', true)->comment('Identificador único para cada tipo de cobertura de seguro en la base de datos.');
            $table->text('Descripcion')->comment('Descripción o nombre de la cobertura de seguro.');
            $table->decimal('Limite', 18)->comment('Límite máximo de cobertura proporcionado por este seguro.');
            $table->decimal('Deducible', 18)->comment('Cantidad que el asegurado debe pagar antes de que el seguro comience a cubrir.');
            $table->decimal('Premium', 18)->comment('Costo de la prima del seguro.');
            $table->integer('IdTipoRiesgo')->index('fk_coberturaseguro_tiporiesgocobertura')->comment('Clave foránea que referencia al tipo de riesgo asociado con la cobertura del seguro.');
            $table->boolean('Status')->default(false)->comment('Indica si la cobertura del seguro está activa (1) o inactiva (0).');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coberturaseguro');
    }
};
