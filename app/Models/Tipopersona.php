<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TipoPersona extends Model
{
    use HasFactory;

    protected $table = 'tipopersona';  // Especifica el nombre de la tabla en la base de datos
    protected $primaryKey = 'IdTipoPersona';  // Define la clave primaria si no es 'id'
    public $timestamps = false;  // Desactiva el manejo automático de timestamps si no tienes 'created_at' y 'updated_at'

    protected $fillable = [
        'Descripcion', 
        'Status'
    ];

    // Aquí podrías definir relaciones si otros modelos se relacionan con TipoPersona
}
