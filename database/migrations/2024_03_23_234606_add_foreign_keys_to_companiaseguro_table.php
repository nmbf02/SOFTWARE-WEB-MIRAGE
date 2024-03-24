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
        Schema::table('companiaseguro', function (Blueprint $table) {
            $table->foreign(['IdSector'], 'FK_CompaniaSeguro_Sector')->references(['IdSector'])->on('sector')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('companiaseguro', function (Blueprint $table) {
            $table->dropForeign('FK_CompaniaSeguro_Sector');
        });
    }
};
