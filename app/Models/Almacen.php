<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Almacen extends Model
{
    use HasFactory;

    protected $table = 'almacen';  // Especificando el nombre de la tabla
    protected $primaryKey = 'IdAlmacen';  // Definiendo la llave primaria

    protected $fillable = [
        'IdSucursal',
        'Descripcion',
        'Status'
    ];

    public function sucursal()
    {
        return $this->belongsTo(Sucursal::class, 'IdSucursal');  // Relación con el modelo Sucursal
    }
}
