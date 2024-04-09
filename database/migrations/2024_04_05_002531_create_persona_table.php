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
        Schema::create('persona', function (Blueprint $table) {
            $table->integer('IdPersona', true)->comment('Identificador único para cada persona registrada en el sistema.');
            $table->text('Nombre')->comment('Nombre de la persona.');
            $table->text('Apellido')->comment('Apellido de la persona.');
            $table->date('FechaNacimiento')->comment('Fecha de nacimiento de la persona. Este campo es opcional dependiendo del uso de la tabla.');
            $table->text('Telefono')->comment('Número de teléfono de contacto de la persona.');
            $table->text('Email')->comment('Dirección de correo electrónico de la persona.');
            $table->integer('IdSector')->index('fk_persona_sector')->comment('Clave foránea que referencia al sector o área geográfica donde reside o trabaja la persona. Se vincula con una tabla Sector.');
            $table->text('Casa')->comment('Información sobre la residencia de la persona, como número de casa o apartamento.');
            $table->text('Calle')->comment('Nombre de la calle o avenida donde reside la persona.');
            $table->integer('IdCuenta')->nullable()->index('fk_persona_cuentabanco')->comment('Clave foránea opcional que vincula a la persona con una cuenta bancaria o de otro tipo en el sistema.');
            $table->integer('IdSeguro')->index('fk_persona_seguro')->comment('Clave foránea opcional que vincula a la persona con una póliza de seguro registrada en el sistema.');
            $table->boolean('Status')->default(false)->comment('Indica si el registro de la persona está activo (1) o inactivo (0).');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('persona');
    }
};
