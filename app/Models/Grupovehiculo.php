<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupovehiculo extends Model
{
    use HasFactory;

    protected $table = 'grupovehiculos'; // Asegurar que Laravel use el nombre correcto de la tabla

    protected $primaryKey = 'IdGrupoVehiculo'; // Definir la clave primaria

    protected $fillable = ['Descripcion', 'Status']; // Permitir asignación masiva para estas columnas

    protected $casts = [
        'Status' => 'boolean', // Convertir Status a tipo booleano
    ];

    protected $hidden = ['created_at', 'updated_at']; // Ocultar estos campos cuando se convierta el modelo a array o JSON
}