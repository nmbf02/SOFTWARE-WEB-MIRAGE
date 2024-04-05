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
        Schema::table('documentopersona', function (Blueprint $table) {
            $table->foreign(['IdPersona'], 'FK_DocumentoPersona_Persona')->references(['IdPersona'])->on('persona')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdTipoDocumentoPersona'], 'FK_DocumentoPersona_TipoDocumento')->references(['IdTipoDocumentoPersona'])->on('tipodocumentopersona')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('documentopersona', function (Blueprint $table) {
            $table->dropForeign('FK_DocumentoPersona_Persona');
            $table->dropForeign('FK_DocumentoPersona_TipoDocumento');
        });
    }
};
