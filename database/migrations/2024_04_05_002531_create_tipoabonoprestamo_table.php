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
        Schema::create('tipoabonoprestamo', function (Blueprint $table) {
            $table->integer('IdTipoAbonoPrestamo', true)->comment('Identificador único para cada tipo de abono o pago realizado sobre un préstamo.');
            $table->text('Descripcion')->comment('Descripción o nombre del tipo de abono, como "Pago Parcial", "Pago Total Anticipado", "Pago de Intereses", "Amortización a Capital", etc.');
            $table->boolean('Status')->default(false)->comment('Indica si el tipo de abono está activo (1) o inactivo (0).');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipoabonoprestamo');
    }
};
