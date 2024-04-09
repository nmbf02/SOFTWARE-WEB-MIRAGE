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
        Schema::create('cotizacionrenta', function (Blueprint $table) {
            $table->integer('IdCotizacionRenta', true)->comment('Identificador único para cada cotización de renta generada en el sistema.');
            $table->integer('IdCliente')->index('fk_cotizacionrenta_clientes')->comment('Clave foránea que vincula la cotización a un cliente específico registrado en la tabla Clientes.');
            $table->integer('IdTipoCotizacionRenta')->index('fk_cotizacionrenta_tipocotizacionrenta')->comment('Clave foránea que referencia al tipo de cotización de renta, permitiendo clasificar las cotizaciones según categorías predefinidas en la tabla TipoCotizacionRenta.');
            $table->date('Fecha')->comment('Fecha en la que se realiza la cotización.');
            $table->date('FechaInicio')->comment('Fecha de inicio propuesta para el periodo de alquiler.');
            $table->date('FechaFin')->comment('Fecha de finalización propuesta para el periodo de alquiler.');
            $table->decimal('DescuentoTotal', 18)->comment('Total de descuentos aplicados a la cotización.');
            $table->decimal('PrecioFinal', 18)->comment('Precio final de la cotización después de aplicar descuentos y otros ajustes.');
            $table->integer('IdEstadoCotizacionRenta')->index('fk_cotizacionrenta_estadocotizacionrenta')->comment('Clave foránea que indica el estado de la cotización (por ejemplo, pendiente, aprobada, rechazada) referenciando a la tabla EstadoCotizacionRenta.');
            $table->date('ValidaHasta')->comment('Fecha hasta la cual la cotización es válida.');
            $table->integer('IdUsuario')->index('fk_cotizacionrenta_usuario')->comment('Clave foránea que vincula la cotización a un usuario específico, quien sería el empleado o agente que realizó la cotización.');
            $table->boolean('Status')->default(false)->comment('Indica si la cotización está activa (1) o inactiva (0).');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cotizacionrenta');
    }
};
