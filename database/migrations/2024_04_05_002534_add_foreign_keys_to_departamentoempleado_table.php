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
        Schema::table('departamentoempleado', function (Blueprint $table) {
            $table->foreign(['IdSucursal'], 'FK_DepartamentoEmpleado_Sucursal')->references(['IdSucursal'])->on('sucursal')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('departamentoempleado', function (Blueprint $table) {
            $table->dropForeign('FK_DepartamentoEmpleado_Sucursal');
        });
    }
};
