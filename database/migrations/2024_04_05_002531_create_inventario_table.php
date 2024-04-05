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
        Schema::create('inventario', function (Blueprint $table) {
            $table->integer('IdInventario', true)->comment('Identificador único para cada entrada de inventario en el sistema.');
            $table->integer('IdUbicacion')->index('fk_inventario_ubicacion')->comment('Clave foránea que referencia a la ubicación específica donde se almacena el bien o producto. Este campo vincula el inventario con un registro específico en la tabla Ubicacion, facilitando el seguimiento de dónde se encuentran físicamente los productos.');
            $table->integer('IdTipoMovimiento')->index('fk_inventario_tipomovimiento')->comment('Clave foránea que referencia al tipo de movimiento de inventario registrado (por ejemplo, entrada por compra, salida por venta, ajuste de inventario). Vincula el inventario a un registro específico en la tabla TipoMovimientoInventario.');
            $table->date('FechaInicio')->comment('Fecha en la que se registra el inicio del movimiento de inventario.');
            $table->date('FechaFin')->comment('Fecha en la que se completa el movimiento de inventario. Este campo es útil para movimientos que no son instantáneos o que se planifican para un rango de fechas.');
            $table->date('FechaCierre')->nullable()->comment('Fecha de cierre del movimiento de inventario, utilizada para confirmar la finalización de un proceso o ajuste.');
            $table->integer('IdUsuario')->index('fk_inventario_usuario')->comment('Clave foránea que referencia al usuario responsable del movimiento de inventario.');
            $table->text('Observacion')->nullable()->comment('Comentarios o notas adicionales sobre el movimiento de inventario.');
            $table->decimal('Monto', 18)->comment('Valor monetario asociado con el movimiento de inventario, útil para entradas de compra o ajustes de valor.');
            $table->boolean('Status')->default(false)->comment('Indica si el registro de inventario está activo (1) o inactivo (0).');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventario');
    }
};
