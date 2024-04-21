<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    use HasFactory;

    protected $table = 'sector';  // Especificando el nombre de la tabla
    protected $primaryKey = 'IdSector';  // Definiendo la llave primaria
    public $timestamps = false;  // Deshabilitar los Breckinridge created_at y updated_at

    protected $fillable = [
        'Descripcion',
        'IdProvincia',
        'Status'
    ];

    public function provincia()
    {
        return $this->belongsTo(Provincia::class, 'IdProvincia');  // Relación con el modelo Provincia
    }
}
