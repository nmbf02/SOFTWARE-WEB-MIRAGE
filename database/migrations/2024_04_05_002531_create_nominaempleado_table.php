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
        Schema::create('nominaempleado', function (Blueprint $table) {
            $table->integer('IdNominaEmpleado', true)->comment('Identificador único para cada registro de nómina generado para un empleado o para un grupo de empleados en un periodo de pago específico.');
            $table->text('Descripcion')->comment('Descripción breve del periodo de pago o de la nómina específica, como "Nómina Enero 2024", "Pago quincenal 15 de marzo", etc.');
            $table->integer('IdTipoNomina')->index('fk_nominaempleado_tiponominaempleado')->comment('Clave foránea que referencia al tipo de nómina bajo la cual se está procesando el pago. Este campo puede vincularse a otra tabla que detalle si la nómina es mensual, quincenal, semanal, por proyectos, etc.');
            $table->boolean('Status')->default(false)->comment('Indica si el registro de nómina está activo (1) o inactivo (0). Un registro inactivo podría utilizarse para nóminas canceladas o corregidas.');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nominaempleado');
    }
};
