<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estadopoliza extends Model
{
    use HasFactory;

    protected $table = 'estadopoliza'; 

    protected $primaryKey = 'IdEstadoPoliza'; 

    protected $fillable = ['Descripcion', 'Status'];

    protected $casts = [
        'Status' => 'boolean',
    ];
}
