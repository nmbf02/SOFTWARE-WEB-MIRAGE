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
        Schema::create('beneficioempleado', function (Blueprint $table) {
            $table->integer('IdEmpleado')->index('fk_beneficioempleado_empleado')->comment('Clave foránea que identifica al empleado que recibe el beneficio.');
            $table->integer('IdBeneficio')->index('fk_beneficioempleado_beneficio')->comment('Clave foránea que identifica el beneficio asignado al empleado.');
            $table->boolean('Status')->default(false)->comment('Indica si la asignación del beneficio al empleado está activa o no.');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('beneficioempleado');
    }
};
