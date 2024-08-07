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
        'Descripcion',
        'KilometrajeInicial',
        'KilometrajeFinal',
        'DesdeFecha',
        'HastaFecha',
        'Status',
        'IdAceite',
        'Notas'
    ];
}
