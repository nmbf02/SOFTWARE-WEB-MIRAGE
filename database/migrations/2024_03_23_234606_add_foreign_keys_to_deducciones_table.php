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
        Schema::table('deducciones', function (Blueprint $table) {
            $table->foreign(['IdEmpleado'], 'FK_Deducciones_Empleado')->references(['IdEmpleado'])->on('empleados')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdTipoDeduccion'], 'FK_Deducciones_TipoDeduccion')->references(['IdTipoDeduccion'])->on('tipodeducciones')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('deducciones', function (Blueprint $table) {
            $table->dropForeign('FK_Deducciones_Empleado');
            $table->dropForeign('FK_Deducciones_TipoDeduccion');
        });
    }
};
