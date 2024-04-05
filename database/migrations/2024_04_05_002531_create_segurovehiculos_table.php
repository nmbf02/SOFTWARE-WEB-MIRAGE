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
        Schema::create('segurovehiculos', function (Blueprint $table) {
            $table->integer('IdSeguroVehiculo', true)->comment('Identificador único para cada registro de seguro de vehículo en el sistema.');
            $table->integer('IdAseguradoraVehiculo')->index('fk_segurovehiculos_aseguradoravehiculos')->comment('Clave foránea que referencia a la entidad aseguradora que emite la póliza de seguro. Se vincula con una tabla de aseguradoras donde se almacena información detallada sobre estas.');
            $table->text('NumeroSeguro')->comment('Número de la póliza de seguro o cualquier otro identificador único proporcionado por la aseguradora.');
            $table->date('FechaContrato')->comment('Fecha en la que se contrató el seguro del vehículo.');
            $table->date('FechaVencimiento')->comment('Fecha en la que expira la validez del seguro.');
            $table->date('LimiteRenovacion')->comment('Fecha límite para renovar el seguro sin que el vehículo quede desprotegido.');
            $table->decimal('MontoCosto', 18)->comment('Costo del seguro para el periodo de cobertura especificado.');
            $table->integer('IdMoneda')->index('fk_segurovehiculos_moneda')->comment('Clave foránea que referencia a la moneda en la que se efectúa el pago del seguro. Se vincula con una tabla de monedas donde se almacena información sobre las distintas monedas utilizadas.');
            $table->boolean('Status')->default(false)->comment('Indica si el registro del seguro del vehículo está activo (1) o inactivo (0).');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('segurovehiculos');
    }
};
