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
        Schema::create('empleados', function (Blueprint $table) {
            $table->integer('IdEmpleado', true)->comment('Identificador único para cada empleado en la base de datos.');
            $table->integer('IdPersona')->index('fk_empleado_persona')->comment('Clave foránea que referencia a la tabla Persona, donde se almacena la información personal del empleado.');
            $table->integer('IdDepartamentoEmpleado')->index('fk_empleado_departamentoempleado')->comment('Clave foránea que referencia a la tabla DepartamentoEmpleado, indicando el departamento al que pertenece el empleado.');
            $table->integer('IdTipoEmpleado')->index('fk_empleado_tipoempleado')->comment('Clave foránea que referencia a la tabla TipoEmpleado, la cual categoriza a los empleados según su tipo o categoría laboral.');
            $table->integer('IdCargoEmpleado')->index('fk_empleado_cargoempleado')->comment('Clave foránea que referencia a la tabla CargoEmpleado, identificando el cargo que el empleado desempeña en la empresa.');
            $table->integer('IdTipoContratoEmpleado')->index('fk_empleado_tipocontratoempleado')->comment('Clave foránea que referencia a la tabla TipoContratoEmpleado, especificando el tipo de contrato laboral del empleado.');
            $table->decimal('MontoPagoPorHora', 18)->nullable()->comment('Monto que se paga al empleado por cada hora de trabajo. Relevante para empleados con contratos por hora.');
            $table->decimal('SalarioBase', 18)->comment('Salario base mensual o periódico del empleado, sin contar horas extras o bonificaciones.');
            $table->integer('HorasTrabajoSemanales')->comment('Número de horas que el empleado está contratado para trabajar cada semana.');
            $table->date('FechaIngreso')->comment('Fecha en la que el empleado inició su relación laboral con la empresa.');
            $table->integer('IdNominaEmpleado')->nullable()->index('fk_empleado_nominaempleado')->comment('Clave foránea que referencia a la tabla NominaEmpleado, vinculando al empleado con su esquema de nómina específico.');
            $table->boolean('Status')->default(false)->comment('Indica si el registro del empleado está activo (1) o inactivo (0).');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
};
