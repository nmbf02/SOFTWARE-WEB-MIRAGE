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
        Schema::create('cuotasvencidas', function (Blueprint $table) {
            $table->integer('IDCuotaVencida', true)->comment('Identificador único para cada registro de cuota vencida en la base de datos.');
            $table->integer('IdAbonoPrestamoVehiculo')->nullable()->index('fk_cuotasvencidas_abonoprestamovehiculo')->comment('Clave foránea que referencia a un registro específico en la tabla AbonoPrestamoVehiculo, vinculando la cuota vencida con un préstamo de vehículo específico.');
            $table->date('FechaVencimiento')->comment('La fecha en la cual la cuota debía ser pagada y no lo fue, marcando el inicio del período de mora.');
            $table->decimal('Monto', 18)->comment('Monto de la cuota que no se pagó en la fecha de vencimiento.');
            $table->integer('DiasRetraso')->comment('Número de días que han transcurrido desde la fecha de vencimiento hasta la fecha actual o hasta que se realizó el pago, indicando el grado de mora.');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cuotasvencidas');
    }
};
