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
        Schema::table('ciudad', function (Blueprint $table) {
            $table->foreign(['IdProvincia'], 'FK_Ciudad_Provincia')->references(['IdProvincia'])->on('provincia')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ciudad', function (Blueprint $table) {
            $table->dropForeign('FK_Ciudad_Provincia');
        });
    }
};
