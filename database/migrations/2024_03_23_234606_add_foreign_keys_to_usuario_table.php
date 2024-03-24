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
        Schema::table('usuario', function (Blueprint $table) {
            $table->foreign(['IdEmpleado'], 'FK_Usuario_Empleado')->references(['IdEmpleado'])->on('empleados')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdRolSistemaUsuario'], 'FK_Usuario_RolSistemaUsuario')->references(['IdRolSistemaUsuario'])->on('rolsistemausuario')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('usuario', function (Blueprint $table) {
            $table->dropForeign('FK_Usuario_Empleado');
            $table->dropForeign('FK_Usuario_RolSistemaUsuario');
        });
    }
};
