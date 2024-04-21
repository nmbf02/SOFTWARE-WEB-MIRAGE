<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    use HasFactory;

    protected $table = 'ciudad';  // Especificando el nombre de la tabla si no sigue la convención de nombres de Laravel
    public $timestamps = false;  // Desactivando la actualización de los campos created_at y updated_at
    protected $primaryKey = 'IdCiudad';  // Definiendo la llave primaria

    protected $fillable = [
        'Descripcion',
        'IdProvincia',
        'Status'
    ];

    public function provincia()
    {
        return $this->belongsTo(Provincia::class, 'IdProvincia');  // Definiendo la relación con el modelo Provincium
    }
}
