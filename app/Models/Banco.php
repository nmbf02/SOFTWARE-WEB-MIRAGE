<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banco extends Model
{
    use HasFactory;

    protected $table = 'banco';  // Especificando el nombre de la tabla
    protected $primaryKey = 'IdBanco';  // Definiendo la llave primaria

    protected $fillable = [
        'Descripcion',
        'IdSector',
        'Telefono',
        'Email',
        'Status'
    ];

    public function sector()
    {
        return $this->belongsTo(Sector::class, 'IdSector');  // Relación con el modelo Sector
    }
}
