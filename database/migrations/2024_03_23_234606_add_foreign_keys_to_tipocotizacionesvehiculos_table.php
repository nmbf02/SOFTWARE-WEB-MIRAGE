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
        Schema::table('tipocotizacionesvehiculos', function (Blueprint $table) {
            $table->foreign(['IdLapsoTiempo'], 'FK_TipoCotizacionesVehiculos_LapsoTiempo')->references(['IdLapsoTiempo'])->on('lapsotiempo')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tipocotizacionesvehiculos', function (Blueprint $table) {
            $table->dropForeign('FK_TipoCotizacionesVehiculos_LapsoTiempo');
        });
    }
};
