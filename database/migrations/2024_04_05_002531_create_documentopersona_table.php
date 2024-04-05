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
        Schema::create('documentopersona', function (Blueprint $table) {
            $table->integer('IdDocumentoPersona', true)->comment('Identificador único para cada documento registrado en la base de datos.');
            $table->integer('IdTipoDocumentoPersona')->index('fk_documentopersona_tipodocumento')->comment('Clave foránea que referencia al tipo de documento (por ejemplo, DNI, pasaporte, licencia de conducir). Permite clasificar los documentos según su naturaleza.');
            $table->integer('IdPersona')->index('fk_documentopersona_persona')->comment('Clave foránea que referencia a la persona a la que pertenece el documento. Vincula el documento con el registro de la persona en la base de datos.');
            $table->text('Descripcion')->comment('Una descripción o detalles adicionales sobre el documento, como el número de documento, la autoridad emisora, fechas de validez, etc.');
            $table->boolean('Status')->default(false)->comment('Indica si el documento está activo (1) o inactivo (0). Esto puede ser útil para gestionar documentos expirados o reemplazados.');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documentopersona');
    }
};
