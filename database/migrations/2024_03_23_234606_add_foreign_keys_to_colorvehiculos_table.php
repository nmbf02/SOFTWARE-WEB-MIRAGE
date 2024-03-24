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
        Schema::table('colorvehiculos', function (Blueprint $table) {
            $table->foreign(['IdAcabadoColorVehiculo'], 'FK_ColorVehiculos_AcabadoColorVehiculos')->references(['IdAcabadoColorVehiculo'])->on('acabadocolorvehiculos')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('colorvehiculos', function (Blueprint $table) {
            $table->dropForeign('FK_ColorVehiculos_AcabadoColorVehiculos');
        });
    }
};
