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
        Schema::table('beneficioempleado', function (Blueprint $table) {
            $table->foreign(['IdBeneficio'], 'FK_BeneficioEmpleado_Beneficio')->references(['IdBeneficio'])->on('beneficio')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdEmpleado'], 'FK_BeneficioEmpleado_Empleado')->references(['IdEmpleado'])->on('empleados')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('beneficioempleado', function (Blueprint $table) {
            $table->dropForeign('FK_BeneficioEmpleado_Beneficio');
            $table->dropForeign('FK_BeneficioEmpleado_Empleado');
        });
    }
};
