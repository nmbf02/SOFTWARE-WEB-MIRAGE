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
        Schema::table('sucursal', function (Blueprint $table) {
            $table->foreign(['IdEmpresa'], 'FK_Sucursal_Empresa')->references(['IdEmpresa'])->on('empresa')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdSector'], 'FK_Sucursal_Sector')->references(['IdSector'])->on('sector')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sucursal', function (Blueprint $table) {
            $table->dropForeign('FK_Sucursal_Empresa');
            $table->dropForeign('FK_Sucursal_Sector');
        });
    }
};
