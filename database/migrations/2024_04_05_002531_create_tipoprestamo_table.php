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
        Schema::create('tipoprestamo', function (Blueprint $table) {
            $table->integer('IdTipoPrestamo', true)->comment('Identificador único para cada tipo de préstamo ofrecido por la institución.');
            $table->text('Nombre')->comment('Nombre del tipo de préstamo, como "Préstamo Personal", "Préstamo Hipotecario", "Préstamo para Vehículos", "Línea de Crédito", etc.');
            $table->text('Descripcion')->nullable()->comment('Descripción detallada del préstamo, incluyendo la finalidad del mismo, condiciones especiales, ventajas, etc.');
            $table->integer('PlazoMaximo')->comment('El máximo plazo de tiempo (usualmente expresado en meses o años) permitido para la devolución del préstamo.');
            $table->decimal('PagoInicialMinimo', 18)->comment('El monto mínimo de pago inicial requerido para acceder al préstamo, si aplica.');
            $table->decimal('TasaInteres', 5)->comment('La tasa de interés aplicable al préstamo, la cual puede variar dependiendo del tipo de préstamo, plazo, y perfil del cliente.');
            $table->boolean('Status')->default(false)->comment('Indica si el tipo de préstamo está activo (1) o inactivo (0). ');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipoprestamo');
    }
};
