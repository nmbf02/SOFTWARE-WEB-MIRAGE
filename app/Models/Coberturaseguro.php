<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoberturaSeguro extends Model
{
    use HasFactory;

    protected $table = 'coberturaseguro';  // Especificando el nombre de la tabla
    protected $primaryKey = 'IdCoberturaSeguro';  // Definiendo la llave primaria

    protected $fillable = [
        'Descripcion',
        'Limite',
        'Deducible',
        'Premium',
        'IdTipoRiesgo',
        'Status'
    ];

    public function tipoRiesgo()
    {
        return $this->belongsTo(TipoRiesgo::class, 'IdTipoRiesgo');  // Relación con el modelo TipoRiesgo
    }
}
