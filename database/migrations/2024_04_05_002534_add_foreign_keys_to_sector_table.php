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
        Schema::table('sector', function (Blueprint $table) {
            $table->foreign(['IdProvincia'], 'FK_Sector_Provincia')->references(['IdProvincia'])->on('provincia')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sector', function (Blueprint $table) {
            $table->dropForeign('FK_Sector_Provincia');
        });
    }
};
