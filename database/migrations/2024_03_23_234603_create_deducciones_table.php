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
        Schema::create('deducciones', function (Blueprint $table) {
            $table->integer('IdDeduccion', true)->comment('Identificador único para cada deducción registrada.');
            $table->integer('IdEmpleado')->index('fk_deducciones_empleado')->comment('Clave foránea que referencia al empleado al que se le aplica la deducción.');
            $table->integer('IdTipoDeduccion')->index('fk_deducciones_tipodeduccion')->comment('Clave foránea que referencia al tipo de deducción aplicada (impuestos, seguros, etc.).');
            $table->decimal('Monto', 18)->comment('Monto de la deducción aplicada al empleado.');
            $table->dateTime('FechaDeduccion')->comment('Fecha y hora en que se registra o aplica la deducción.');
            $table->boolean('Status')->default(false)->comment('Indica si la deducción está activa (1) o inactiva (0).');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deducciones');
    }
};
