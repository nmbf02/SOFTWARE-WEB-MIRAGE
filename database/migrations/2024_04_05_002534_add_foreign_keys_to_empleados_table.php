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
        Schema::table('empleados', function (Blueprint $table) {
            $table->foreign(['IdCargoEmpleado'], 'FK_Empleado_CargoEmpleado')->references(['IdCargoEmpleado'])->on('cargoempleado')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdDepartamentoEmpleado'], 'FK_Empleado_DepartamentoEmpleado')->references(['IdDepartamentoEmpleado'])->on('departamentoempleado')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdNominaEmpleado'], 'FK_Empleado_NominaEmpleado')->references(['IdNominaEmpleado'])->on('nominaempleado')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdPersona'], 'FK_Empleado_Persona')->references(['IdPersona'])->on('persona')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdTipoContratoEmpleado'], 'FK_Empleado_TipoContratoEmpleado')->references(['IdTipoContratoEmpleado'])->on('tipocontratoempleado')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdTipoEmpleado'], 'FK_Empleado_TipoEmpleado')->references(['IdTipoEmpleado'])->on('tipoempleado')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('empleados', function (Blueprint $table) {
            $table->dropForeign('FK_Empleado_CargoEmpleado');
            $table->dropForeign('FK_Empleado_DepartamentoEmpleado');
            $table->dropForeign('FK_Empleado_NominaEmpleado');
            $table->dropForeign('FK_Empleado_Persona');
            $table->dropForeign('FK_Empleado_TipoContratoEmpleado');
            $table->dropForeign('FK_Empleado_TipoEmpleado');
        });
    }
};
