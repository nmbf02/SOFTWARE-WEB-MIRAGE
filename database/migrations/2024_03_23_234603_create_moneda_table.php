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
        Schema::create('moneda', function (Blueprint $table) {
            $table->integer('IdMoneda', true)->comment('Identificador único para cada tipo de moneda en el sistema.');
            $table->text('Descripcion')->comment('Nombre o descripción de la moneda, como "Dólar Estadounidense", "Euro", "Peso Mexicano", etc.');
            $table->decimal('Tasa', 18, 4)->comment('La tasa de cambio de la moneda en relación con una moneda base definida por la empresa, lo que permite realizar conversiones y contabilizar los valores correctamente en los informes financieros.');
            $table->boolean('Status')->default(false)->comment('Indica si la moneda está activa (1) o inactiva (0). Una moneda puede ser inactivada si ya no se utiliza en las operaciones de la empresa.');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('moneda');
    }
};
