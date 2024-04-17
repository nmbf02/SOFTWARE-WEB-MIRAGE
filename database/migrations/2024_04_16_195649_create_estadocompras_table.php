<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('estadocompras', function (Blueprint $table) {
            $table->id('IdEstadoCompra'); // Specifying the primary key column name as 'IdEstadoCompra'
            $table->text('Descripcion'); // Changing the type from 'string' to 'text'
            $table->boolean('Status')->default(0); // Adding a 'Status' column with a default value
            $table->timestamps(); // Optional: Adds created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estadocompras');
    }
};
