<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Condicionseguro extends Model
{
    use HasFactory;

    protected $table = 'condicionseguro';

    protected $primaryKey = 'IdCondicionSeguro';

    public $timestamps = false;

    protected $fillable = [
        'Descripcion',
        'FechaEfectiva',
        'Status'
    ];

    protected $casts = [
        'FechaEfectiva' => 'date',
        'Status' => 'boolean',
    ];
}
