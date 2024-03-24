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
        Schema::create('condicionseguro', function (Blueprint $table) {
            $table->integer('IdCondicionSeguro', true)->comment(' Identificador único para cada registro de condición de seguro en la base de datos.');
            $table->text('Descripcion')->comment('Detalle o descripción de la condición del seguro, explicando los términos específicos bajo los cuales opera el seguro.');
            $table->date('FechaEfectiva')->comment('Fecha en la cual la condición del seguro se hace efectiva o entra en vigor.');
            $table->boolean('Status')->default(false)->comment('Indica si la condición del seguro está activa (1) o inactiva (0).');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('condicionseguro');
    }
};
