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
        Schema::table('banco', function (Blueprint $table) {
            $table->foreign(['IdSector'], 'FK_Banco_Sector')->references(['IdSector'])->on('sector')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('banco', function (Blueprint $table) {
            $table->dropForeign('FK_Banco_Sector');
        });
    }
};
