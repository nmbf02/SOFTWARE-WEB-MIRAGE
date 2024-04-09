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
        Schema::table('detallenomina', function (Blueprint $table) {
            $table->foreign(['IdEmpleado'], 'FK_DetalleNomina_Empleado')->references(['IdEmpleado'])->on('empleados')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdNominaEmpleado'], 'FK_DetalleNomina_NominaEmpleado')->references(['IdNominaEmpleado'])->on('nominaempleado')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detallenomina', function (Blueprint $table) {
            $table->dropForeign('FK_DetalleNomina_Empleado');
            $table->dropForeign('FK_DetalleNomina_NominaEmpleado');
        });
    }
};
