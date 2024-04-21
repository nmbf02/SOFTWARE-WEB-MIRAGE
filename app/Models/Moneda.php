<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Moneda extends Model
{
    use HasFactory;

    protected $table = 'moneda';

    protected $primaryKey = 'IdMoneda';

    public $timestamps = false;

    protected $fillable = [
        'Descripcion',
        'Tasa',
        'Status'
    ];

    protected $casts = [
        'Tasa' => 'decimal:4',
        'Status' => 'boolean',
    ];
}
