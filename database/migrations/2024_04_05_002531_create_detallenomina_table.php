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
        Schema::create('detallenomina', function (Blueprint $table) {
            $table->integer('IdNominaEmpleado')->index('fk_detallenomina_nominaempleado')->comment('Clave foránea que referencia al registro de nómina general o al periodo de pago. Identifica a qué periodo de nómina pertenece este detalle.');
            $table->integer('IdEmpleado')->index('fk_detallenomina_empleado')->comment('Clave foránea que referencia al empleado al que se le está pagando. Conecta el detalle de la nómina con los datos específicos del empleado.');
            $table->decimal('HorasOrdinarias', 18)->comment('Total de horas ordinarias trabajadas por el empleado durante el periodo de nómina.');
            $table->decimal('HorasExtras', 18)->comment('Total de horas extras trabajadas por el empleado, sujetas a un pago adicional.
TotalDevengado');
            $table->decimal('TotalDevengado', 18)->comment('Suma total de ingresos del empleado antes de deducciones, incluyendo salario base y horas extras.');
            $table->decimal('Deducciones', 18)->comment('Total de deducciones aplicadas al salario del empleado, que pueden incluir impuestos, seguro social, pensiones, entre otros.');
            $table->decimal('OtrosIngresos', 18)->comment('Total de ingresos adicionales para el empleado, que pueden incluir bonificaciones, comisiones, entre otros.');
            $table->decimal('NetoAPagar', 18)->comment('Monto final a pagar al empleado después de aplicar deducciones y agregar otros ingresos.');
            $table->dateTime('FechaPago')->comment('Fecha en la que se realiza el pago de la nómina al empleado.');
            $table->boolean('Status')->default(false)->comment('Indica si el detalle del nomina está activo (1) o inactivo (0).');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detallenomina');
    }
};
