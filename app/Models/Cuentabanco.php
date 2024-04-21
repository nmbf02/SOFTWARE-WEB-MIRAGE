<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuentabanco extends Model
{
    use HasFactory;

    protected $table = 'cuentabanco';  // Especificando el nombre de la tabla
    protected $primaryKey = 'IdCuenta';  // Definiendo la llave primaria

    protected $fillable = [
        'Descripcion',
        'IdBanco',
        'NumeroCuenta',
        'Tipo',
        'IdMoneda',
        'FechaApertura',
        'Status'
    ];

    public function banco()
    {
        return $this->belongsTo(Banco::class, 'IdBanco');  // Relación con el modelo Banco
    }

    public function moneda()
    {
        return $this->belongsTo(Moneda::class, 'IdMoneda');  // Relación con el modelo Moneda
    }
}
