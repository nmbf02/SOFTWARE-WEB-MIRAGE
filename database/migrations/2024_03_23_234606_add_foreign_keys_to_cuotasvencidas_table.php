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
        Schema::table('cuotasvencidas', function (Blueprint $table) {
            $table->foreign(['IdAbonoPrestamoVehiculo'], 'FK_CuotasVencidas_AbonoPrestamoVehiculo')->references(['IdAbonoPrestamoVehiculo'])->on('abonoprestamovehiculos')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cuotasvencidas', function (Blueprint $table) {
            $table->dropForeign('FK_CuotasVencidas_AbonoPrestamoVehiculo');
        });
    }
};
