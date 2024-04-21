<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acabadocolorvehiculo extends Model
{
    use HasFactory;

    protected $table = 'acabadocolorvehiculos'; // Asegurar que Laravel use el nombre correcto de la tabla

    protected $primaryKey = 'IdAcabadoColorVehiculo'; // Definir la clave primaria

    protected $fillable = ['Descripcion', 'Status']; // Permitir asignación masiva para estas columnas

    protected $casts = [
        'Status' => 'boolean', // Convertir Status a tipo booleano
    ];
}
