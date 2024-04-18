<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiposeguro extends Model
{
    use HasFactory;

    protected $table = 'tiposeguro'; 

    protected $primaryKey = 'IdTipoSeguro'; 

    protected $fillable = ['Descripcion', 'Status'];

    protected $casts = [
        'Status' => 'boolean',
    ];
}
