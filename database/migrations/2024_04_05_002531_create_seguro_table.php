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
        Schema::create('seguro', function (Blueprint $table) {
            $table->integer('IdSeguro', true)->comment('Identificador único para cada póliza de seguro en el sistema.');
            $table->integer('IdTipoSeguro')->index('fk_seguro_tiposeguro')->comment('Clave foránea que referencia al tipo de seguro (por ejemplo, vida, vehicular, hogar, etc.). Se vincula con una tabla TipoSeguro donde se detallan estos tipos.');
            $table->integer('IdCompaniaSeguro')->index('fk_seguro_companiaseguro')->comment('Clave foránea que referencia a la compañía de seguros que emite la póliza. Se vincula con una tabla CompaniaSeguro que almacena información sobre las aseguradoras.');
            $table->text('NumeroPoliza')->comment('Número de la póliza de seguro o cualquier otro identificador único proporcionado por la compañía de seguros.');
            $table->date('FechaInicio')->comment('Fecha de inicio de la cobertura de la póliza de seguro.');
            $table->date('FechaVencimiento')->comment('Fecha en la que termina la cobertura de la póliza de seguro.');
            $table->integer('IdCoberturaSeguro')->index('fk_seguro_coberturaseguro')->comment('Clave foránea que referencia a los detalles de la cobertura del seguro. Se vincula con una tabla CoberturaSeguro donde se especifican las coberturas.');
            $table->integer('IdEstadoPoliza')->index('fk_seguro_estadopolizaseguro')->comment('Clave foránea que referencia al estado actual de la póliza (activa, en revisión, cancelada, etc.).');
            $table->integer('IdCondicionSeguro')->index('fk_seguro_condicionseguro')->comment('Clave foránea que referencia a las condiciones particulares o especiales de la póliza de seguro.');
            $table->text('TelefonoContacto')->comment('Número de teléfono para contacto en caso de necesitar utilizar la póliza o para consultas.');
            $table->text('EmailContacto')->comment('Dirección de correo electrónico de contacto para consultas o notificaciones relacionadas con la póliza.');
            $table->boolean('Status')->default(false)->comment('Indica si la póliza de seguro está activa (1) o inactiva (0).');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seguro');
    }
};
