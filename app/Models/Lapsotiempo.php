<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LapsoTiempo extends Model
{
    use HasFactory;

    protected $table = 'lapsotiempo';  // Especificando el nombre de la tabla
    protected $primaryKey = 'IdLapsoTiempo';  // Definiendo la llave primaria

    protected $fillable = [
        'Descripcion',
        'Status'
    ];

    protected $casts = [
        'Status' => 'boolean', // Convertir Status a tipo booleano
    ];

    public function garantias()
    {
        return $this->hasMany(Garantia::class, 'IdLapsoTiempo');
    }
}