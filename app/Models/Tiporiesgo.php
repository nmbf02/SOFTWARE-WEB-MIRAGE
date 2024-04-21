<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiporiesgo extends Model
{
    use HasFactory;

    protected $table = 'tiporiesgo'; 

    protected $primaryKey = 'IdTipoRiesgo'; 

    protected $fillable = ['Descripcion', 'Status'];

    protected $casts = [
        'Status' => 'boolean',
    ];
}
