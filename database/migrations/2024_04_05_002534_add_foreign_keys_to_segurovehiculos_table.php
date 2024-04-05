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
        Schema::table('segurovehiculos', function (Blueprint $table) {
            $table->foreign(['IdAseguradoraVehiculo'], 'FK_SeguroVehiculos_AseguradoraVehiculos')->references(['IdAseguradoraVehiculo'])->on('aseguradoravehiculos')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdMoneda'], 'FK_SeguroVehiculos_Moneda')->references(['IdMoneda'])->on('moneda')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('segurovehiculos', function (Blueprint $table) {
            $table->dropForeign('FK_SeguroVehiculos_AseguradoraVehiculos');
            $table->dropForeign('FK_SeguroVehiculos_Moneda');
        });
    }
};
