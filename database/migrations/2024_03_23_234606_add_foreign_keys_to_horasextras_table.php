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
        Schema::table('horasextras', function (Blueprint $table) {
            $table->foreign(['IdEmpleado'], 'FK_HorasExtras_Empleado')->references(['IdEmpleado'])->on('empleados')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('horasextras', function (Blueprint $table) {
            $table->dropForeign('FK_HorasExtras_Empleado');
        });
    }
};
