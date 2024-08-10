<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;

    protected $table = 'Servicio';
    protected $primaryKey = 'IdServicio';
    public $timestamps = true;

    protected $fillable = [
        'IdTipoMantenimiento',
        'KilometrajeInicial',
        'KilometrajeFinal',
        'DesdeFecha',
        'HastaFecha',
        'Status',
        'IdAceite',
        'Notas'
    ];

    // Relación belongsTo, un Servicio pertenece a un TipoMantenimiento
    public function tipoMantenimiento()
    {
        return $this->belongsTo('App\Models\TipoMantenimiento', 'IdTipoMantenimiento', 'IdTipoMantenimiento');
    }
}

