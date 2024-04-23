<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CategoriaLicencia extends Model
{
    use HasFactory;

    protected $table = 'categorialicencia';  // Especifica el nombre de la tabla si no sigue la convención de nombres de Laravel
    protected $primaryKey = 'IdCategoriaLicencia';  // Clave primaria, si no es 'id'

    public $timestamps = false;  // Desactivar timestamps si tu tabla no tiene las columnas created_at y updated_at

    protected $fillable = [
        'Descripcion', 
        'Abreviatura', 
        'Status'
    ];

    // Aquí podrías agregar relaciones o cualquier otra funcionalidad específica del modelo
}
