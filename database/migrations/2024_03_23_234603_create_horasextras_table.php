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
        Schema::create('horasextras', function (Blueprint $table) {
            $table->integer('IdHoraExtra', true)->comment('Identificador único para cada registro de horas extras en el sistema.');
            $table->integer('IdEmpleado')->index('fk_horasextras_empleado')->comment('Clave foránea que referencia al empleado que ha trabajado las horas extras. Vincula el registro de horas extras directamente con un registro específico de empleado en la tabla Empleados.');
            $table->decimal('CantidadHoras', 18)->comment('Cantidad de horas extras trabajadas. Puede ser un número entero o decimal, dependiendo de cómo se desee registrar la fracción de horas.');
            $table->decimal('Monto', 18)->comment('Monto a pagar por las horas extras trabajadas. Este valor puede calcularse basándose en el salario del empleado y el tipo de tasa aplicable a las horas extras según la política de la empresa o la legislación laboral.');
            $table->dateTime('Fecha')->comment(' Fecha en la que se trabajaron las horas extras. Si se utiliza DATETIME, también se puede registrar la hora específica.');
            $table->boolean('Status')->default(false)->comment('Indica si el registro de horas extras está activo (1) o inactivo (0). Esto es útil para gestionar correcciones o cancelaciones de registros de horas extras.');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('horasextras');
    }
};
