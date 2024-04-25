<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MotivoOrdenReparacion extends Model
{
    use HasFactory;
    
    protected $table = 'tipomotivoordenreparacion'; // Asegurar que Laravel use el nombre correcto de la tabla

    protected $primaryKey = 'IdTipoMotivoOrdenReparacion'; // Definir la clave primaria

    protected $fillable = ['Descripcion', 'Status']; // Permitir asignación masiva para estas columnas

    protected $casts = [
        'Status' => 'boolean', // Convertir Status a tipo booleano
    ];

}