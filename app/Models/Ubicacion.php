<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{
    use HasFactory;

    protected $table = 'ubicacion';  // Especificando el nombre de la tabla
    protected $primaryKey = 'IdUbicacion';  // Definiendo la llave primaria

    protected $fillable = [
        'IdAlmacen',
        'Descripcion',
        'Status'
    ];

    public function almacen()
    {
        return $this->belongsTo(Almacen::class, 'IdAlmacen');  // Relación con el modelo Almacen
    }
}
