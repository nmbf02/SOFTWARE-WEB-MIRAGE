<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    use HasFactory;

    protected $table = 'sucursal';  // Especificando el nombre de la tabla
    protected $primaryKey = 'IdSucursal';  // Definiendo la llave primaria

    protected $fillable = [
        'Nombre',
        'IdEmpresa',
        'IdSector',
        'Calle',
        'NumeroEdificio',
        'Telefono',
        'Email',
        'Status'
    ];

    public function empresa()
    {
        return $this->belongsTo(Empresa::class, 'IdEmpresa');  // Relación con el modelo Empresa
    }

    public function sector()
    {
        return $this->belongsTo(Sector::class, 'IdSector');  // Relación con el modelo Sector
    }

    // Si necesitas incluir los modelos relacionados como almacenes
    public function almacenes()
    {
        return $this->hasMany(Almacen::class, 'IdSucursal');  // Relación con el modelo Almacen
    }
}
