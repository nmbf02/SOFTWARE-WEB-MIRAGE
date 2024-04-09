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
        Schema::create('otrosingresos', function (Blueprint $table) {
            $table->integer('IdIngreso', true)->comment('Identificador único para cada registro de ingreso en el sistema.');
            $table->integer('IdEmpleado')->index('fk_otrosingresos_empleado')->comment('Clave foránea que referencia al empleado que recibe el ingreso adicional. Se vincula con una tabla Empleados donde se almacena la información de los empleados.');
            $table->integer('IdTipoIngreso')->index('fk_otrosingresos_tipoingreso')->comment('Clave foránea que referencia al tipo de ingreso recibido. Esto podría vincularse con una tabla TipoIngresos que clasifica los diferentes tipos de ingresos adicionales.');
            $table->decimal('Monto', 18)->comment('Cantidad de dinero recibida por este ingreso adicional.');
            $table->dateTime('FechaIngreso')->comment('Fecha en la que se recibió el ingreso.');
            $table->boolean('Status')->default(false)->comment('Indica si el registro de ingreso está activo (1) o inactivo (0).');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('otrosingresos');
    }
};
