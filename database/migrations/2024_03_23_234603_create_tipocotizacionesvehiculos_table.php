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
        Schema::create('tipocotizacionesvehiculos', function (Blueprint $table) {
            $table->integer('IdTipoCotizacion', true)->comment('Identificador único para cada tipo de cotización de vehículos definido en el sistema.');
            $table->text('Descripcion')->comment('Descripción o nombre del tipo de cotización, que explica las características principales del acuerdo, como "Venta de Contado", "Financiamiento", "Leasing Operativo", "Alquiler por Día".');
            $table->integer('Vigencia')->comment('Número de días que la cotización es válida desde su emisión. Esto es crucial para dar a los clientes un marco temporal dentro del cual deben tomar una decisión.');
            $table->integer('IdLapsoTiempo')->index('fk_tipocotizacionesvehiculos_lapsotiempo')->comment('Clave foránea opcional que vincula con una tabla de LapsoTiempo si el tipo de cotización se asocia con contratos o acuerdos de duración determinada.');
            $table->boolean('IncluyeSeguro')->comment('Indica si la cotización incluye algún tipo de seguro para el vehículo (1) o no (0).');
            $table->boolean('RequiereDeposito')->comment('Indica si para este tipo de cotización se requiere un depósito de seguridad o inicial (1) o no (0).');
            $table->boolean('Status')->default(false)->comment('Indica si el tipo de cotización está activo (1) o inactivo (0).');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipocotizacionesvehiculos');
    }
};
