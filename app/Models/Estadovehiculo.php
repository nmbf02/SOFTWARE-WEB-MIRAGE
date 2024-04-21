<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estadovehiculo extends Model
{
    use HasFactory;

    protected $table = 'estadovehiculos'; // Asegurar que Laravel use el nombre correcto de la tabla

    protected $primaryKey = 'IdEstadoVehiculo'; // Definir la clave primaria

    protected $fillable = ['Descripcion', 'Status']; // Permitir asignación masiva para estas columnas

    protected $casts = [
        'Status' => 'boolean', // Convertir Status a tipo booleano
    ];
}
