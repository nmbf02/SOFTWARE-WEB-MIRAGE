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
        Schema::table('otrosingresos', function (Blueprint $table) {
            $table->foreign(['IdEmpleado'], 'FK_OtrosIngresos_Empleado')->references(['IdEmpleado'])->on('empleados')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdTipoIngreso'], 'FK_OtrosIngresos_TipoIngreso')->references(['IdTipoIngreso'])->on('tipoingresos')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('otrosingresos', function (Blueprint $table) {
            $table->dropForeign('FK_OtrosIngresos_Empleado');
            $table->dropForeign('FK_OtrosIngresos_TipoIngreso');
        });
    }
};
