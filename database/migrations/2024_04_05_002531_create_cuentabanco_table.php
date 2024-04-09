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
        Schema::create('cuentabanco', function (Blueprint $table) {
            $table->integer('IdCuenta', true)->comment('Identificador único para cada cuenta bancaria en la base de datos.');
            $table->text('Descripcion')->comment('Descripción o detalle de la cuenta bancaria, como puede ser el propósito o uso específico de la cuenta.');
            $table->integer('IdBanco')->index('fk_cuentabanco_banco')->comment('Clave foránea que referencia al banco donde se encuentra la cuenta.');
            $table->text('NumeroCuenta')->comment('Número de la cuenta bancaria.');
            $table->text('Email')->comment('Correo electrónico asociado a la cuenta bancaria, utilizado para notificaciones o comunicaciones bancarias.');
            $table->text('Tipo')->comment('Tipo de cuenta bancaria, como puede ser cuenta corriente, cuenta de ahorros, etc.');
            $table->integer('IdMoneda')->index('fk_cuentabanco_moneda')->comment('Clave foránea que referencia a la moneda en la que se maneja la cuenta.');
            $table->text('Titular')->comment('Nombre del titular de la cuenta bancaria.');
            $table->dateTime('FechaApertura')->comment('Fecha en que se abrió la cuenta bancaria.');
            $table->boolean('Status')->default(false)->comment('Indica si la cuenta bancaria está activa (1) o inactiva (0).');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cuentabanco');
    }
};
