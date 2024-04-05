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
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->integer('IdVehiculo', true)->comment('Identificador único para cada vehículo en el sistema.');
            $table->integer('IdModeloVehiculo')->index('fk_vehiculos_modelovehiculo')->comment('Clave foránea que referencia al modelo del vehículo. Conecta el vehículo con detalles específicos del modelo, incluyendo la marca.');
            $table->integer('IdColorVehiculo')->index('fk_vehiculos_colorvehiculo')->comment('Clave foránea que referencia al color del vehículo. Permite clasificar los vehículos según su color.');
            $table->integer('IdEstadoVehiculo')->index('fk_vehiculos_estadovehiculo')->comment('Clave foránea que referencia al estado actual del vehículo (por ejemplo, nuevo, usado, en reparación).');
            $table->integer('AnoVehiculo')->comment('Año de fabricación del vehículo.');
            $table->text('VIN')->comment('Número de Identificación del Vehículo (VIN). Es un identificador único para cada vehículo.');
            $table->decimal('Precio', 18)->comment('Precio de venta o valor del vehículo.');
            $table->integer('IdUbicacion')->index('fk_vehiculos_ubicacion')->comment('Clave foránea que referencia la ubicación física actual del vehículo, como una sucursal o un almacén.');
            $table->integer('IdSeguroVehiculo')->nullable()->index('fk_vehiculos_segurovehiculo')->comment('Clave foránea opcional que referencia a una póliza de seguro asociada al vehículo.');
            $table->integer('IdTransmisionVehiculo')->index('fk_vehiculos_transmisionvehiculo')->comment('Clave foránea que referencia al tipo de transmisión del vehículo, como manual o automática.');
            $table->integer('IdTraccionVehiculo')->index('fk_vehiculos_traccionvehiculo')->comment('Clave foránea que referencia al tipo de tracción del vehículo, como tracción delantera, tracción trasera o tracción integral.');
            $table->text('MotorCilindro')->comment('Información sobre el motor y cilindraje del vehículo.');
            $table->text('Serie')->comment('Número de serie del vehículo.');
            $table->integer('IdTipoVehiculoConcesionario')->index('fk_vehiculos_tipovehiculoconcesionario')->comment('Clave foránea que referencia al tipo de vehículo según la clasificación del concesionario: Venta, renta o subasta.');
            $table->integer('IdTipoVehiculo')->index('fk_vehiculos_tipovehiculo')->comment('Clave foránea que referencia al tipo general del vehículo, como coche, motocicleta, camión, etc.');
            $table->text('Placa')->comment('Número de placa del vehículo.');
            $table->text('PlacaExhibicion')->nullable()->comment('Número de placa de exhibición, si aplica.');
            $table->text('Chasis')->comment('Número de chasis del vehículo.');
            $table->text('Matricula')->nullable()->comment('Número de matrícula del vehículo.');
            $table->text('Marbete')->nullable()->comment('Información del marbete del vehículo, si aplica.');
            $table->integer('CapacidadPasajeros')->comment('Número de pasajeros que el vehículo puede transportar de manera segura.');
            $table->date('FechaExpedicion')->comment('Fecha de expedición del vehículo, que puede referirse a la fecha de fabricación o importación.');
            $table->integer('IdSegmentoMercado')->index('fk_vehiculos_segmentomercadovehiculo')->comment('Clave foránea que referencia al segmento de mercado al que pertenece el vehículo, como lujo, económico, deportivo, etc.');
            $table->integer('IdClasificacionVehiculo')->nullable()->index('fk_vehiculos_clasificacionvehiculo')->comment('Clave foránea que referencia a la clasificación del vehículo basada en criterios específicos como uso, tamaño, capacidad, entre otros.');
            $table->integer('IdTipoItbis')->index('fk_vehiculos_tipoitbis')->comment('Clave foránea que referencia al tipo de ITBIS (Impuesto sobre Transferencia de Bienes Industrializados y Servicios) aplicable al vehículo.');
            $table->integer('IdGarantia')->nullable()->index('fk_vehiculos_garantia')->comment('Clave foránea opcional que vincula el vehículo con su garantía, si aplica.');
            $table->boolean('Status')->default(false)->comment('Indica si el vehículo está activo (1) o ha sido retirado del inventario (0).');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehiculos');
    }
};
